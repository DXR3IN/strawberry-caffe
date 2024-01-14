<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Cafe;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cafe::create(array(
            'nama_menu'=>'Nasi Goreng',
            'menu_id'=>1001,
            'harga'=>25000,
            'keterangan'=>'Makanan yang berbahan dasar nasi putih dan kecap',
            'rating'=>4.0,
            'image_menu'=>'friedrice.jpg'
        ));
        Cafe::create(array(
            'nama_menu'=>'Latte',
            'menu_id'=>1002,
            'harga'=>20000,
            'keterangan'=>'Minum bang',
            'rating'=>4.0,
            'image_menu'=>'latte.jpg'
        ));
        Cafe::create(array(
            'nama_menu'=>'Bakso',
            'menu_id'=>1001,
            'harga'=>25000,
            'keterangan'=>'Bola daging yang nikmat dengan mie',
            'rating'=>3.5,
            'image_menu'=>'bakso.jpg'
        ));
        Cafe::create(array(
            'nama_menu'=>'Teh Es',
            'menu_id'=>1002,
            'harga'=>25000,
            'keterangan'=>'Teh dingin yang menyegarkan',
            'rating'=>3.5,
            'image_menu'=>'icetea.jpg'
        ));

    }
}
