<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Login page
Route::get('/login',[AdminController::class, 'login']);

//Route About page
Route::get('/about-us', function () {
    return view('about');
});

//Main page route
Route::get('/', [CafeController::class, 'index'])->middleware('guest');

//Route untuk menghapus menu dari cart
Route::get('/remove/{cart_id}', [CafeController::class, 'removeFromCustomerCart'])->name('cart-remove');

//Lihat meja
Route::get('/table/see', [TableController::class, 'seeTable']);

//Ambil meja sebagai Customer
Route::post('/table/make', [TableController::class, 'makeTableforCustomer']);

//ambil meja yang sudah di reservasi oleh customer
Route::get('/table/get', [TableController::class, 'getTableforCustomer']);
Route::post('/table/get', [TableController::class, 'ambilPilihanMeja']);

//Route keluar dari pesanan
Route::post('/table/out', [TableController::class, 'KeluarPilihanMeja']);

//Route untuk menambahkan cart
Route::get('/caffe/{id}', [CafeController::class, 'addToCustomerCart'])->name('addtocustomermenu.to.cart');

//Route ke shopping cart
Route::get('/cart', [CafeController::class, 'cart'])->name('customer-cart');

//Route memindahkan cart ke database pesanan
Route::get('/order', [CafeController::class, 'order'])->name('order');



//admin

Route::get('/strawberry/admin', [AdminController::class, 'adminPage']);

Route::get('/strawberry/admin/pesanan', [AdminController::class, 'pesananPage']);

Route::get('/strawberry/admin/menu', [AdminController::class, 'menuPage']);

Route::get('/strawberry/admin/addmenu', [AdminController::class, 'addMenu'])->name('addMenu');



