<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            CommentsTableSeeder::class,
            CartsTableSeeder::class,
            ImagesTableSeeder::class,
        ]);
    }
}
