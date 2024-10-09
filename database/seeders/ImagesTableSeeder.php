<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        Image::create([
            'name' => 'product1.jpg',
            'product_id' => 1
        ]);

        Image::create([
            'name' => 'product2.jpg',
            'product_id' => 2
        ]);
    }
}
