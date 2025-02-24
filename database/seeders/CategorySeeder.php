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
                'name' => 'Clothing',
                'slug' => 'clothing',
                'image' => 'category-1.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'image' => 'category-2.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Foot Wear',
                'slug' => 'footwear',
                'image' => 'category-5.jpg',
                'status' => 1,
            ]

        ]);
    }
}
