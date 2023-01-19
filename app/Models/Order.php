<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'shipping_id', 'product_id', 'color_id',
    ];

    function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    function get_color(){
        return $this->belongsTo(Color::class, 'color_id');
    }

    function get_size(){
        return $this->belongsTo(Size::class, 'size_id');
    }

    // get customer Order
    // public static function($id){

    // }
}
