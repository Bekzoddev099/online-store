<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product description.',
            'price' => 99.99,
            'category_id' => 1 // Bu category jadvalidagi mavjud category_id bo'lishi kerak
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'Another sample product description.',
            'price' => 49.99,
            'category_id' => 2
        ]);
    }
}
