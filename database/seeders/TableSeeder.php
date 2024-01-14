<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::create(array(
            'id'=>3001,
            'nama_table'=>'1A',
            'image_table'=>'table1.jpg',
            'kapasitas'=>5,
            'keterangan_table'=>'Berada didepan kasir'
        ));
        Table::create(array(
            'id'=>3002,
            'nama_table'=>'1B',
            'image_table'=>'table2.jpg',
            'kapasitas'=>4,
            'keterangan_table'=>'Berada dibagian belakang lantai 1'
        ));
        Table::create(array(
            'nama_table'=>'2A',
            'image_table'=>'table3.jpg',
            'kapasitas'=>4,
            'keterangan_table'=>'Berada dibagian belakang lantai 1'
        ));
    }
}
