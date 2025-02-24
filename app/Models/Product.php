<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
         'name', 'slug', 'category_id', 'price', 'discount_price', 
        'description', 'image_front','image_back' , 'stock', 'sku', 'tags', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            $product->sku = $product->generateSKU();
        });
    }

    Public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function generateSKU()
    {
        $categoryCode = $this->category ? strtoupper(substr($this->category->name, 0, 3)) : 'GEN';
        $productCode = strtoupper(substr($this->name, 0 , 3));
        $randomNumber = rand(100 , 999);

        return "{$categoryCode}-{$productCode}-{$randomNumber}";
    }

}
