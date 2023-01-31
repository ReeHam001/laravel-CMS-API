<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'un-categorized', 'status' => 1]);
        Category::create(['name' => 'Natural', 'status' => 1]);
        Category::create(['name' => 'Flowers', 'status' => 1]);
        Category::create(['name' => 'Kitchen', 'status' => 0]);
    }
}
