<?php

use App\Models\Attribute;
use App\Models\Cart;
use App\Models\ProductReview;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Message;

function cart(){
    $cookie = Cookie::get('cookie_id');

    return Cart::where('cookie_id', $cookie)->get();
}

function wishlist(){
    $cookie = Cookie::get('cookie_id');

    return Wishlist::where('cookie_id', $cookie)->get();
}

function attribute(){
    return Attribute::all();
}

function UserReview(){
    return ProductReview::latest()->get();
    return User::get('id');

}

function Message(){
    return Message::latest()->get();
    return User::get('id');
}


function ProductReview(){
    $review = Product::get('id');
    return ProductReview::where('id', $review)->get();
}

?>
