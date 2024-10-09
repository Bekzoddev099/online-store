<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'text' => 'Great product!',
            'user_id' => 1,  // Bu user jadvalidagi mavjud user_id bo'lishi kerak
            'product_id' => 1 // Bu product jadvalidagi mavjud product_id bo'lishi kerak
        ]);

        Comment::create([
            'text' => 'Not bad.',
            'user_id' => 2,
            'product_id' => 2
        ]);
    }
}
