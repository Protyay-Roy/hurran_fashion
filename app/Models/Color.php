<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory;
    use SoftDeletes;

    function Attribute() {
        return $this->hasMany(Attribute::class, 'color_id');
    }

    function get_order(){
        return $this->hasOne(Order::class, 'color_id');
    }

    function Cart(){
        return $this->hasMany(Cart::class, 'color_id');
    }


    function wishlist(){
        return $this->hasMany(Wishlist::class, 'color_id');
    }
}
