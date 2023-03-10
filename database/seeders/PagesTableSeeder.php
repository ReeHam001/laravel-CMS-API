<?php

namespace Database\Seeders;

use App\Models\Page;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        Page::create([
            'title' => 'About Us',
            'description' => $faker->paragraph,
            'status' => 1,
            'comment_able' => 0,
            'post_type' => 'page',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Page::create([
            'title' => 'Our Vision',
            'description' => $faker->paragraph,
            'status' => 1,
            'comment_able' => 0,
            'post_type' => 'page',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
