<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menus')->insert([
            ['name' => 'Caffe Latte', 'category' => 'Minuman', 'stock' => 18, 'price' => 18000],
            ['name' => 'Matcha', 'category' => 'Minuman', 'stock' => 100, 'price' => 29000],
            ['name' => 'Fried Rice', 'category' => 'Makanan', 'stock' => 120, 'price' => 20000],
            ['name' => 'Chicken Wings', 'category' => 'Makanan', 'stock' => 80, 'price' => 14000],
        ]);
    }
}
