<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(array(
            'id'=>111120012012,
            'key_type'=>'biarmakan123756',
            'usertype'=>'admin',
            'password'=>'123',
        ));
        User::create(array(
            'key_type'=>'biarmakan',
            'password'=>'123',
        ));
    }
}
