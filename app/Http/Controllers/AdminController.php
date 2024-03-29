<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\CustomerTable;
use App\Models\MenuCategory;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function adminPage(){
        $customer = CustomerTable::count();
        $menu = Cafe::count();
        $totalOrders = Order::sum('total_price');
        $orderQuantity = Order::sum('quantity');
        return view('admin.index')->with(compact('totalOrders','customer','menu','orderQuantity'));
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

    public function updateDataMenu(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama_menu'=>'required|string',
            'menu_id'=>'required|integer',
            'harga'=>'required|integer',
            'keterangan'=>'required|string',
            'rating'=>'required|integer',
            'image_menu'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //jika validasi gagal, kembali lagi ke halaman edit dengan pesan error
        if($validator->fails()){
            return redirect('/strawberry/admin/menu')
            ->withErrors($validator)
            ->withInput();
        }

        //ambil data movie yang akan diupdate
        $cafe=Cafe::findOrFail($id);

        //Jika ada file yang diunggah, simpan file baru
        if($request->hasFile('image_menu')){
            $randomName = Str::uuid()->toString();
            $fileExtension = $request->file('image_menu')->getClientOriginalExtension();
            $filename = $randomName . '.' . $fileExtension;

            //simpan file foto ke folder public/images
            $request->file('image_menu')->move(public_path('assets/img/menu'), $filename);

            //delete foto jika ada
            if(File::exists(public_path('images/'.$cafe->image_menu))){
                File::delete(public_path('images/'.$cafe->image_menu));
            }

            $cafe->update([
                'nama_menu'=>$request->nama_menu,
                'menu_id'=>$request->menu_id,
                'harga'=>$request->harga,
                'keterangan'=>$request->keterangan,
                'rating'=>$request->rating,
                'image_menu'=>$filename
            ]);
        }else{
            $cafe->update([
                'nama_menu'=>$request->nama_menu,
                'menu_id'=>$request->menu_id,
                'harga'=>$request->harga,
                'keterangan'=>$request->keterangan,
                'rating'=>$request->rating,
            ]);
        }

        return redirect('/strawberry/admin/menu')->with('success', 'Data berhasil diubah');
    }

    public function deleteDataMenu($id){
        $menus = Cafe::findOrFail($id);
        //delete foto jika ada
        if(File::exists(public_path('assets/img/menu'.$menus->image_menu))){
            File::delete(public_path('assets/img/menu'.$menus->image_menu));
        }

        //hapus movie record dari database
        $menus->delete();

        return redirect('/strawberry/admin/menu')->with('success', 'Data berhasil dihapus');
    }

    public function updateDataPage($id){
        $cafe = Cafe::find($id);
        $menuCategories = MenuCategory::all();

        return view('admin.edit')->with(compact('cafe', 'menuCategories'));
    }

    public function meja(){
        $tables = Table::all();
        return view('admin.addmeja')->with(compact('tables'));
    }

    public function addDataMeja(Request $request){
        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('image_table')->getClientOriginalExtension();
        $filename = $randomName . '.' . $fileExtension;

        //simpan file foto ke folder public/images
        $request->file('image_table')->move(public_path('assets/img/meja'), $filename);

        //simpan data ketabel cafes
        Table::create([
            'nama_table'=>$request->nama_table,
            'image_table'=>$filename,
            'kapasitas'=>$request->kapasitas,
            'keterangan_table'=>$request->keterangan_table,
        ]);

        return redirect('/strawberry/admin/meja')->with('success', 'data berhasil disimpan');
    }


}
