<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\MenuCategory;
use App\Models\Order;
use Illuminate\Http\Request;

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
        $menuCategoriesCount = MenuCategory::count();
        $totalMenuCount = Cafe::count();

        return view("admin.menu")->with(compact('menus', 'totalMenuCount', 'menuCategoriesCount'));
    }

    //menambahkan menu
    public function addMenu(){
        $menuCategories = MenuCategory::all();
        return view("admin.addmenu")->with(compact('menuCategories'));
    }
}
