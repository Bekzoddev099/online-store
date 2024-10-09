<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        Cart::create([
            'product_id' => 1,
            'user_id' => 1
        ]);

        Cart::create([
            'product_id' => 2,
            'user_id' => 2
        ]);
    }
}
