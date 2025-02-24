<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            // Fetch the first category or create a default one
            $category = Category::first() ?? Category::create([
                'name' => 'Default Category',
                'slug' => Str::slug('Default Category'),
                'image_front' => 'product-1-1.jpg',
                'image_back' => 'product-1-2.jpg',
                'status' => 1,
            ]);
    
            $products = [
                [
                    'name' => 'Henley Shirt',
                    'slug' => Str::slug('Henley Shirt'),
                    'category_id' => $category->id,
                    'price' => 150.00,
                    'discount_price' => 116.00,
                    'description' => 'Stylish and comfortable Henley Shirt.',
                    'image_front' => 'product-1-1.jpg',
                    'image_back' => 'product-1-2.jpg',
                    'stock' => 50,
                    'tags' => 'Clothes,Women,Dress',
                    'status' => 1,
                ],
                [
                    'name' => 'Leather Jacket',
                    'slug' => Str::slug('Leather Jacket'),
                    'category_id' => $category->id,
                    'price' => 200.00,
                    'discount_price' => 180.00,
                    'description' => 'Premium leather jacket for men.',
                    'image_front' => 'product-3-1.jpg',
                    'image_back' => 'product-3-2.jpg',
                    'stock' => 30,
                    'tags' => 'Clothes,Men,Jacket',
                    'status' => 1,
                ],
                [
                    'name' => 'Wireless Headphones',
                    'slug' => Str::slug('Wireless Headphones'),
                    'category_id' => $category->id,
                    'price' => 250.00,
                    'discount_price' => 199.00,
                    'description' => 'High-quality wireless headphones with noise cancellation.',
                    'image_front' => 'product-8-1.jpg',
                    'image_back' => 'product-8-2.jpg',
                    'stock' => 20,
                    'tags' => 'Electronics,Audio,Headphones',
                    'status' => 1,
                ]
            ];
    
            // Insert products without manually generating SKU (Model will handle it)
            foreach ($products as $productData) {
                Product::create($productData);
            }
        
    
    }
}
