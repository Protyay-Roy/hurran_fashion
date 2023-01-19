<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    function gallery() {
        return $this->hasMany(Gallery::class, 'product_id');
    }


    function Category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function subcategory() {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    function attributes(){
        return $this->hasMany(Attribute::class, 'product_id');
    }

    function Cart(){
        return $this->hasOne(Cart::class, 'product_id');
    }


    function wishlist(){
        return $this->hasOne(Wishlist::class, 'product_id');
    }



    function ProductReview(){
        return $this->hasOne(ProductReview::class, 'product_id');
    }




    function ProductRev(){
        return $this->hasOne(ProductReview::class, 'product_id');
    }


}
