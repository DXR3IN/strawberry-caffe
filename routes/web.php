<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TableController;
use App\Http\Middleware\CheckLevel;
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
Route::get('/login',[LoginController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::group(['middleware' => ['auth']], function(){
    //Route About page
    Route::get('/about-us', function () {
        return view('about');
    });

    //Main page route
    Route::get('/', [CafeController::class, 'welcome']);

    Route::get('/menu', [CafeController::class, 'index'])->name('menu');

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
    Route::post('/table/out', [TableController::class, 'KeluarPilihanMeja'])->name('tableOut');

    //Route untuk menambahkan cart
    Route::get('/caffe/{id}', [CafeController::class, 'addToCustomerCart'])->name('addtocustomermenu.to.cart');

    //Route ke shopping cart
    Route::get('/cart', [CafeController::class, 'cart'])->name('customer-cart');

    //Route memindahkan cart ke database pesanan
    Route::get('/order', [CafeController::class, 'order'])->name('order');

    Route::middleware(CheckLevel::class)->group(function(){
        //admin
        Route::get('/strawberry/admin', [AdminController::class, 'adminPage']);

        Route::get('/strawberry/admin/pesanan', [AdminController::class, 'pesananPage']);

        Route::get('/strawberry/admin/menu', [AdminController::class, 'menuPage']);

        Route::get('/strawberry/admin/addmenu', [AdminController::class, 'addMenu'])->name('addMenu');

        Route::post('/strawberry/admin/addmenu', [AdminController::class, 'addDataMenu'])->name('addDataMenu');

        Route::get('/strawberry/admin/{id}/update', [AdminController::class, 'updateDataPage'])->name('menu-update');

        Route::post('/strawberry/admin/{id}/update', [AdminController::class, 'updateDataMenu']);

        Route::get('/strawberry/admin/{id}/delete', [AdminController::class, 'deleteDataMenu'])->name('menu-delete');

        Route::get('/strawberry/admin/meja', [AdminController::class, 'meja'])->name('meja');

        Route::post('/strawberry/admin/meja', [AdminController::class, 'addDataMeja'])->name('meja-add');

        Route::get('/admin/logout-all-users', 'AdminController@logoutAllUsers')->name('admin-logout-all');
    });
});









