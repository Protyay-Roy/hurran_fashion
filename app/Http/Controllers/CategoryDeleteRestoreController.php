<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryDeleteRestoreController extends Controller
{
    function CategoryDeleteRestore() {

        $trush_category = Category::onlyTrashed()->paginate(2);
        $trush_S_category = SubCategory::onlyTrashed()->paginate(2);
        return view('backend.subcategory.delete-restore', [
            'trush_category' => $trush_category,
            'trush_S_category' => $trush_S_category
        ]);

    }
}
