<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    function user(){

        return $this->belongsTo(User::class, 'user_id');
    }


    function categry(){

        return $this->belongsTo(Category::class, 'category_id');
    }
}
