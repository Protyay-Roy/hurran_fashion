<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    function SubCategoryView() {

        $scategories = SubCategory::paginate();
        return view('backend/subcategory/subcategory_view', [
            'scategories' => $scategories
        ]);
    }

    function SubCategoryFrom(){
        return view('backend.subcategory.subcategory_add', [
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }

    function SubCategoryPost(Request $request){

        SubCategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);
        return redirect('subcategory-view')->with('SCatAdd', 'Sub Category Added Successfuly');
    }

    function SubCategoryEdit($id) {
        $scat = SubCategory::findOrFail($id);

        return view('backend.subcategory.subcategory_edit', [
            'scat' => $scat,
            'categories' => Category::orderBy('category_name', 'asc')->get()
        ]);
    }

    function SubCategoryUpdate(Request $req) {

           $update = SubCategory::findOrFail($req->id);
           $update-> subcategory_name = $req->subcategory_name;
           $update-> category_id = $req->category_id;
           $update-> slug = Str::slug($req->subcategory_name);
           $update-> save();
        return back()->with('SCatUpdate', 'Sub Category Added Successfuly');
    }




    function SubCategoryDelete($id){

        $cat_product = Product::where('subcategory_id', $id)->count();
        if($cat_product > 0){
            return back()->with('delete1', "You Can't Delete This Sub Category");
        }

        else{
            SubCategory::findOrFail($id)->delete();
            return back()->with('delete2', "Sub Category Deleted Successfully");
        }

    }


    function SCategoryRestore($id){
        SubCategory::withTrashed()->findOrFail($id)->restore();
        return back()->with('restore', 'Sub Category Restore Successfuly');
    }

    function SPermanentDelete($id){
        SubCategory::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('PermanentDelete', 'Sub Category Deleted Successfuly');
    }
}
