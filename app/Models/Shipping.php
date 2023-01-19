<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use HasFactory;
    use SoftDeletes;
    function Cart(){
        return $this->belongsTo(Cart::class, 'coupon_discount');
    }

    function ShippingUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
