<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Str;
use Cookie;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attribute;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\ProductReview;
use App\Models\Size;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{

    // User dashboard controller / account

    public function myAccount()
    {

        $shipping_id = Shipping::select('id')->where('user_id', auth()->user()->id)->first();
        $orders = Order::where('shipping_id', $shipping_id['id'])->get();
        // dd($orders);
        return view('frontend.my_account', compact('orders'));
    }

    function front()
    {

        $review = message::all();
        $bestsell = ProductReview::all();
        $brand = Brand::all();

        return view('frontend.main', [
            'products' => Product::where('status', 'active')->limit(4)->latest()->get(),
            'carts' => Cart::latest()->limit(3)->get(),
            'review' => $review,
            'bestsell' => $bestsell,
            'brand' => $brand
        ]);
    }


    function SingleProduct($id)
    {


        $product = Product::where('id', $id)->first();
        $gallery = Gallery::where('product_id', $product->id)->get();
        $attribute = attribute::where('product_id', $product->id)->get();
        $review = ProductReview::where('product_id', $product->id)->get();

        $collection = collect($attribute);
        $groupBy = $collection->groupBy('color_id');
        return view('frontend.single_product', [
            'product' => $product,
            'gallery' => $gallery,
            'groupBy' => $groupBy,
            'carts' => Cart::latest()->limit(3)->get(),
            'review' => $review,

        ]);
    }

    function GetSize($color, $product)
    {

        $output = '';
        $sizes = attribute::where('color_id', $color)->where('product_id', $product)->get();


        foreach ($sizes as $size) {

            $output = $output . '<option name="size_id"  value="' . $size->size_id . '">' . $size->size->size_name . '</option>';
        }
        echo $output;
    }



    function Shop(Request $request)
    {
        if ($request->ajax()) {

            $products = Product::where('status', 'active');

            // FILTER FOR CATEGORY VALUE
            if (isset($request->max_price) && !empty($request->max_price)) {

                $products = $products->whereBetween('price', [0 , $request->max_price]);
            }

            // $products = $products->whereBetween('price', [0 , 5000]);

            // FILTER FOR SORT VALUE
            $_GET['sort'] = $request->sort;
            if (isset($_GET['sort']) && !empty($_GET['sort'])) {

                if ($_GET['sort'] == "letest") {
                    $products = $products->orderby("id", "DESC");
                } elseif ($_GET['sort'] == "lowest_price") {
                    $products = $products->orderby("price", "ASC");
                } elseif ($_GET['sort'] == "highest_price") {
                    $products = $products->orderby("price", "DESC");
                } elseif ($_GET['sort'] == "a-z") {
                    $products = $products->orderby("title", "ASC");
                } elseif ($_GET['sort'] == "z-a") {
                    $products = $products->orderby("title", "DESC");
                }
            }

            // FILTER FOR CATEGORY VALUE
            if (isset($request->category_id) && !empty($request->category_id)) {

                $products = $products->whereIn('category_id', $request->category_id);
            }

            // FILTER FOR SIZE VALUE
            if (isset($request->size_id) && !empty($request->size_id)) {
                $productIds = Attribute::whereIn('size_id', $request->size_id)->get();
                $arrayIds = array();
                foreach ($productIds as $key => $productId) {
                    $arrayIds[] = $productId['product_id'];

                }
                $products = $products->whereIn('id', $arrayIds);
            }

            // FILTER FOR COLOR VALUE
            if (isset($request->color_id) && !empty($request->color_id)) {
                $productIds = Attribute::whereIn('color_id', $request->color_id)->get();
                $arrayIds = array();
                foreach ($productIds as $key => $productId) {
                    $arrayIds[] = $productId['product_id'];

                }
                $products = $products->whereIn('id', $arrayIds);
            }

            // FILTER FOR BRAND VALUE
            if (isset($request->brand_id) && !empty($request->brand_id)) {

                $products = $products->whereIn('brand_id', $request->brand_id);
            }


            $products = $products->latest()->get();

            $new_product = Carbon::now();
            return view('frontend.shop_product', [
                'cats' => Category::orderBy('category_name', 'asc')->get(),
                // 'products' => Product::whereIn('category_id', $request->category_id)->where('status', 'active')->latest()->get(),
                'review' => message::all(),
                'new_product' => $new_product,
                'pro_size' => Size::all(),
                'pro_color' => Color::all(),
                'pro_brand' => Brand::all()

            ], compact('products'));
        }
        $new_product = Carbon::now();

        return view('frontend.shop', [
            'cats' => Category::orderBy('category_name', 'asc')->get(),
            'products' => Product::where('status', 'active')->latest()->get(),
            'review' => message::all(),
            'new_product' => $new_product,
            'pro_size' => Size::all(),
            'pro_color' => Color::all(),
            'pro_brand' => Brand::all()

        ]);
    }


    function Blogs()
    {


        return view('frontend.blogs', [
            'blogs' => Blog::latest()->paginate(3)
        ]);
    }


    function Search(Request $request)
    {


        $product = Product::query();

        if ($request->q) {
            // simple where here or another scope, whatever you like
            $product->where('title', 'LIKE', "%$request->q%");
        }

        if ($request->q) {
            $product->orWhere('price', 'LIKE', "%$request->q%");
        }


        $all_product = $product->get();

        return view('frontend.search', [
            'all_product' => $all_product
        ]);
    }


    function About()
    {

        $bestsell = ProductReview::all();

        return view('frontend.about', [
            'bestsell' => $bestsell
        ]);
    }


    function Contact()
    {

        return view('frontend.contact');
    }

    function Message(Request $request)
    {

        $msg = new message;
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->subject = $request->subject;
        $msg->message = $request->message;
        $msg->save();

        return back();
    }





    function BlogsDetails($id)
    {

        $blog = Blog::where('id', $id)->get();
        $category = category::orderBy('category_name', 'asc')->get();
        $comments = comment::where('status', 2)->where('blog_id', $id)->get();


        return view('frontend.blogs_details', [
            'blog' => $blog,
            'category' => $category,
            'comments' => $comments,


        ]);
    }
}
