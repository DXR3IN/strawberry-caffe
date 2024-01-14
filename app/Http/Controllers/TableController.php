<?php

namespace App\Http\Controllers;

use App\Models\CustomerTable;
use App\Models\Table;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function seeTable(){

        $tables = Table::all();

        return view('gettable')->with(compact('tables'));
    }

    //Membuat reservasi meja untuk customer
    public function makeTableforCustomer(Request $request){

        //simpan data ke tabel movies
        CustomerTable::create([
            'nama_customer'=>$request->nama_customer,
            'table_id'=>$request->table_id,
        ]);

        // Simpan data ke dalam sesi
        session(['nama_customer' => $request->nama_customer, 'table_id' => $request->table_id]);

        return redirect('/')->with('success_berhasil', 'Reservasi anda berhasil');
    }

    // public function simpanPilihanMeja(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_customer' => 'required',
    //         'table_id' => 'required',
    //     ]);

    //     // Simpan data ke dalam sesi
    //     session(['nama_customer' => $request->nama_customer, 'table_id' => $request->table_id]);

    //     // Simpan data ke dalam tabel customer_table (opsional, tergantung pada kebutuhan Anda)
    //     CustomerTable::create([
    //         'nama_customer' => $request->nama_customer,
    //         'table_id' => $request->table_id,
    //     ]);

    //     return redirect('/')->with('success_berhasil', 'Selamat, reservasi meja anda sudah kami terima!');
    // }


    //Mengambil meja yang sudah dipakai oleh kustomer tertentu untuk proses tambah pesanan
    public function getTableforCustomer(){
        $customertables = Table::all();

        return view('gettablecustomer')->with(compact('customertables'));
    }

    public function ambilPilihanMeja(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'table_id' => 'required',
        ]);

        try {
            $customerTable = CustomerTable::where([
                'nama_customer' => $request->nama_customer,
                'table_id' => $request->table_id,
            ])->firstOrFail();

            // Simpan data ke dalam sesi
            session(['nama_customer' => $request->nama_customer, 'table_id' => $request->table_id]);

            return redirect('/')->with('success_berhasil', 'Halo lagi!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            // Handle ketika data tidak ditemukan
            return back()->withErrors(['error' => 'Nama customer atau table_id tidak ditemukan dalam database.']);
        }
    }


    public function keluarPilihanMeja(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
