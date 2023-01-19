<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class StoreController extends Controller
{
    public function Store(){
      $store = Store::paginate();
      return view('backend/store/store', [
        'store' => $store,
        'all_store' => Store::count(),
      ]);
    }


    public function StoreAdd(){
      return view('backend/store/store_add');
    }



    public function StorePost(Request $request){


    if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
        $ext = Str::random(10).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path('images/'. $ext));
        $store_id =  Store::insertGetId([
            'title' => $request->title,
            'address' => $request->address,
            'business_hours' => $request->business_hours,
            'contact' => $request->contact,
            'link' => $request->link,
            'thumbnail' =>$ext,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', "Store Added Successfull");
      }
      }


      function Store_edit($id){
        $store = Store::where('id', $id)->first();
        return view('backend/store/store_edit', [
          'store' => $store
        ]);
      }


      function StoreUpdate(Request $request){



        $store = Store::findOrFail($request->id);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $ext = Str::random(10).'.'.$image->getClientOriginalExtension();

            $old_img_location = public_path('images/'.$store->thumbnail);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }

            Image::make($image)->save(public_path('images/'. $ext));

            $store->thumbnail = $ext;
        }

        $store->title = $request->title;
        $store->address = $request->address;
        $store->business_hours = $request->business_hours;
        $store->contact = $request->contact;
        $store->link = $request->link;
        $store->save();

        return redirect()->route('Store')->with('success', "Store Update Successfull");
    }


    function StoreDelete($id){

      $store_product = Product::where('store_id', $id)->count();
      if($store_product > 0){
          return back()->with('delete1', "You Can't Delete This Store");
      }

      else{
          $str = Store::findOrFail($id);

          $old_image = public_path('images/'.$str->thumbnail);
          if(file_exists($old_image)){
              unlink($old_image);
          }
          $str->delete();

          return back()->with('success', "Store Deleted Successfully");
      }


    }




}
