<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menucatagories = [
            [
                'id'=>1001,
                'menu_kategori'=>'foods',
                'ion_icon'=>'fast-food-outline',
                'color_logo'=>'green'
            ],
            [
                'id'=>1002,
                'menu_kategori'=>'drinks',
                'ion_icon'=>'beer-outline',
                'color_logo'=>'red'
            ],
        ];
        foreach($menucatagories as $menucategory){
            MenuCategory::create($menucategory);
        }
    }
}
