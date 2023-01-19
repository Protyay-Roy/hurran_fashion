<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    function ProductRev(){
        return $this->belongsTo(Product::class, 'product_id');
    }


    function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
