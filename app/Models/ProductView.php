<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductView extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'ip_address'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
