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
            'image_table'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBMlET2f9O28dl3QydR-7_EeHURRjx-cdaAYFNc9RBPA&s',
            'kapasitas'=>5,
            'keterangan_table'=>'Berada didepan kasir'
        ));
        Table::create(array(
            'id'=>3002,
            'nama_table'=>'1B',
            'image_table'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi1O_PlcVTf_-Ly9JHBxPle6bFhO-JhvFlWLb9oxJRrA&s',
            'kapasitas'=>4,
            'keterangan_table'=>'Berada dibagian belakang lantai 1'
        ));
    }
}
