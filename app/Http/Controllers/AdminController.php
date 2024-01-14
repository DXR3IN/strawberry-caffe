<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\MenuCategory;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }

    public function adminPage(){
        $totalOrders = Order::sum('total_price');
        return view('admin.index')->with(compact('totalOrders'));
    }

    public function shippedOrder($order_id){

    }

    public function pesananPage(){
        $orders = Order::all();
        return view('admin.pesanan')->with(compact('orders'));
    }

    //melihat tabel menu
    public function menuPage(){
        $menus = Cafe::all();
        $menuCategories = MenuCategory::all();
        $menuCategoriesCount = MenuCategory::count();
        $totalMenuCount = Cafe::count();

        return view("admin.menu")->with(compact('menus', 'totalMenuCount', 'menuCategories','menuCategoriesCount'));
    }

    //menu addMenu
    public function addMenu(){
        $menuCategories = MenuCategory::all();
        return view("admin.addmenu")->with(compact('menuCategories'));
    }

    //proses penambahan menu
    public function addDataMenu(Request $request){
        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('image_menu')->getClientOriginalExtension();
        $filename = $randomName . '.' . $fileExtension;

        //simpan file foto ke folder public/images
        $request->file('image_menu')->move(public_path('assets/img/menu'), $filename);

        //simpan data ketabel cafes
        Cafe::create([
            'nama_menu'=>$request->nama_menu,
            'menu_id'=>$request->menu_id,
            'harga'=>$request->harga,
            'keterangan'=>$request->keterangan,
            'rating'=>$request->rating,
            'image_menu'=>$filename
        ]);

        return redirect('/strawberry/admin/menu')->with('success', 'data berhasil disimpan');
    }
}
