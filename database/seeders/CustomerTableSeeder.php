<?php

namespace Database\Seeders;

use App\Models\CustomerTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerTable::create(array(
            'id'=>5001,
            'nama_customer'=>'Muhammad Irfan',
            'table_id'=>3001
        ));
    }
}
