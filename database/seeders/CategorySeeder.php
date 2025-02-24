<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([

            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'image' => 'electronics.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'image' => 'fashion.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'image' => 'home-kitchen.jpg',
                'status' => 1,
            ]

        ]);
    }
}
