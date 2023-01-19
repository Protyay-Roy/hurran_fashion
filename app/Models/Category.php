<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    // For Mass update
    protected $fillable = [
        'category_name', 'slug'
    ];

    function get_subcategory(){
        return $this->hasOne(SubCategory::class, 'category_id');
    }


    function Category() {
        return $this->hasMany(Category::class, 'category_id');
    }

    function blog(){
        return $this->hasMany(Blog::class, 'category_id');
    }
}
