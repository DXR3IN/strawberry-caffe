<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\CustomerTable;
use App\Models\MenuCategory;
use App\Models\Order;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function index()
    {

        $query = Cafe::latest();

        $menu_categories = MenuCategory::all();

        $searchPerformed = false;

        if (request('search')) {
            $searchTerm = request('search');
            $query->where('nama_menu', 'like', '%' . $searchTerm . '%');
            $searchPerformed = true;
        }

        $selectedMenuIds = request('menu_ids');

        if ($selectedMenuIds) {
            $query->whereIn('menu_id', $selectedMenuIds);
            $searchPerformed = true;
        }

        $cafes = $query->paginate(6)->withQueryString();

        return view('welcome')->with(compact('cafes', 'menu_categories','searchPerformed'));
    }

    public function cart(){
        return view('cart');
    }

    public function addToCustomerCart($cart_id){

        if (!session()->has('nama_customer')) {
            return redirect()->back()->with('error', 'Anda harus memiliki meja dahulu sebelum bisa memesan');
        }

        $cafe = Cafe::findOrFail($cart_id);
        $cart = session()->get('cart', []);

        $searchPerformed = false;

        if(isset($cart[$cart_id])){
            $cart[$cart_id]['quantity']++;
            $searchPerformed = true;
        } else{
            $cart[$cart_id] = [
                "menu_id" => $cafe->id,
                "menu_name" => $cafe->nama_menu,
                "quantity" => 1,
                "price" => $cafe->harga,
            ];
            $searchPerformed = true;
        }
        session()->put('cart', $cart);
        return redirect()->back()->with(['success' => 'Menu berhasil ditambahkan', 'searchPerformed' => $searchPerformed]);

    }

    // public function updateCart(Request $request)
    // {
    //     // Your logic to update the session with the new quantity
    //     $menuId = $request->input('menu_id');
    //     $quantity = $request->input('quantity');

    //     $cart = session('cart', []);

    //     if (isset($cart[$menuId])) {
    //         $cart[$menuId]['quantity'] = $quantity;
    //         session()->put('cart', $cart);
    //         return response()->json(['status' => 'success', 'message' => 'Cart updated successfully']);
    //     } else {
    //         return response()->json(['status' => 'error', 'message' => 'Menu not found in the cart']);
    //     }
    // }

    public function removeFromCustomerCart($cart_id){
        $cart = session()->get('cart', []);

        if(isset($cart[$cart_id])){
            unset($cart[$cart_id]);
            session()->put('cart', $cart);
            return redirect('/cart')->with('success', 'Menu berhasil dihapus dari keranjang.');
        } else {
            return redirect('/cart')->with('error', 'Menu tidak ditemukan di keranjang.');
        }
    }

    public function order(){
        $query = CustomerTable::latest();

        if (!session()->has('nama_customer')) {
            return redirect('/')->with('error', 'Anda harus memiliki meja dahulu sebelum bisa memesan');
        }

        $customer = CustomerTable::where('nama_customer', session('nama_customer'))->where('table_id', session('table_id'))->value('id');
        $carts = session()->get('cart', []);

        try {
            foreach ($carts as $menu_id => $cartData) {
                Order::create([
                    'customer_id' => $customer,
                    'makanan_id' => $menu_id,
                    'quantity' => $cartData['quantity'],
                    'price' => $cartData['price'],
                    'total_price' => $cartData['quantity'] * $cartData['price'],
                ]);
            }

            session()->forget('cart');

            

            return redirect('/')->with('success', 'Pesanan berhasil!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat pesanan. Silakan coba lagi.');
        }
    }


}
