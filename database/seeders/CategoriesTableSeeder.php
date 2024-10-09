<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'All kinds of electronic devices.',
            'image' => 'electronics.jpg',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Fashion and apparel.',
            'image' => 'clothing.jpg',
            'parent_id' => null
        ]);
    }
}
