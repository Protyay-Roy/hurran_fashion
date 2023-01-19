<?php

namespace App\Http\Controllers;

use App\Events\OrderNotification;
use App\Models\Order;
use App\Models\User;
use App\Models\Coupon;
use App\HasRoles;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Attribute;
use App\Models\Site_Details;

use App\Models\Color;
use App\Models\Brand;
use App\Models\Size;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OrderImport;
use App\Models\message;
use App\Models\ProductReview;
use App\Models\Product;
use App\Models\Shipping;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    use SoftDeletes;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    // Get notification by ajax
    public function getNotification(){
        $unreadNotification = auth()->user()->unreadnotifications;

        foreach ($unreadNotification as $dataInfo){

            $users = Shipping::with('ShippingUser')->where('id', $dataInfo->data['shipping_id'])->first();
            $products = Product::where('id', $dataInfo->data['product_id'])->first();
        }
        return view('backend.notification', compact('unreadNotification','users','products'));
    }

    // Mark as read notification
    public function read_notification($id){
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    }

    public function index()
    {
        $verify = User::where('id', 1)->get('id');
        // return Auth::user()->id;
        // if(Auth::user()->id == 1 || 2){

        // OrderNotification::dispatch("test update");

        for($i = 1; $i < 7; $i++){
            $day[] = Carbon::now()->subDays($i)->format('D');
        }

        $this_day = Carbon::now()->format('d M y');

        $today = Order::wheredate('created_at', Carbon::now())->count();
        $yesterday = Order::wheredate('created_at', Carbon::yesterday())->count();
        $seven_days_ago = Order::wheredate('created_at', Carbon::now()->subDays(7))->count();


        $today_sale = Order::wheredate('created_at', Carbon::now())->sum(DB::raw('quantity * product_unit_price'));



        $ordersLastWeek = Order::select('created_at')
                        ->where('created_at', '>', now()->subWeek()->startOfWeek())
                        ->where('created_at', '<', now()->subWeek()->endOfWeek())
                        ->sum(DB::raw('quantity * product_unit_price'));



        $ordersLastMonth = Order::select('created_at')
                        ->where('created_at', '>', now()->subDay()->startOfMonth())
                        ->where('created_at', '<', now()->subDay()->endOfMonth())
                        ->sum(DB::raw('quantity * product_unit_price'));


        $ordersLastYear = Order::select('created_at')
                        ->where('created_at', '>', now()->subDay()->startOfYear())
                        ->where('created_at', '<', now()->subDay()->endOfYear())
                        ->sum(DB::raw('quantity * product_unit_price'));




        $this_month_sale = Order::wheredate('created_at', Carbon::now()->subDays(30)->startOfDay())->sum(DB::raw('quantity * product_unit_price'));
        $this_year_sale = Order::wheredate('created_at', Carbon::now()->subDays(365)->startOfYear())->sum(DB::raw('quantity * product_unit_price'));

        $comment = ProductReview::wheredate('created_at', Carbon::now())->get('massage')->count();






        // Monthly Count For Bar
        $data = Shipping::selectRaw('MONTH(created_at) month, COUNT(*) as count')
        ->groupBy('month')->get();




        $something = Shipping::get(['id', 'created_at'])->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m');
      });


      $jan = Shipping::where('created_at', '>', '2023-01-01')
                        ->where('created_at', '<', '2023-01-31')
                        ->count();


        $feb = Shipping::where('created_at', '>', '2023-02-01')
        ->where('created_at', '<', '2023-02-28')
        ->count();



        $mar = Shipping::where('created_at', '>', '2023-03-01')
        ->where('created_at', '<', '2023-03-31')
        ->count();


        $apr = Shipping::where('created_at', '>', '2023-04-01')
        ->where('created_at', '<', '2023-04-30')
        ->count();


        $may = Shipping::where('created_at', '>', '2023-05-01')
        ->where('created_at', '<', '2023-05-31')
        ->count();

        $jun = Shipping::where('created_at', '>', '2023-06-01')
        ->where('created_at', '<', '2023-06-30')
        ->count();



        $jul = Shipping::where('created_at', '>', '2023-07-01')
        ->where('created_at', '<', '2023-07-31')
        ->count();

        $aug = Shipping::where('created_at', '>', '2023-08-01')
        ->where('created_at', '<', '2023-08-31')
        ->count();


        $sep = Shipping::where('created_at', '>', '2023-09-01')
        ->where('created_at', '<', '2023-09-30')
        ->count();

        $oct = Shipping::where('created_at', '>', '2023-10-01')
        ->where('created_at', '<', '2023-10-31')
        ->count();

        $nov = Shipping::where('created_at', '>', '2023-11-01')
        ->where('created_at', '<', '2023-11-30')
        ->count();

        $dec = Shipping::where('created_at', '>', '2023-12-01')
        ->where('created_at', '<', '2023-12-31')
        ->count();







        return view('backend.dashboard', [
            'today' => $today,
            'this_day' => $this_day,
            'yesterday' => $yesterday,
            'seven_days_ago' => $seven_days_ago,
            'today_sale' => $today_sale,
            'this_month_sale' => $this_month_sale,
            'this_year_sale' => $this_year_sale,
            'comment' => $comment,
            'data' => $data,
            'ordersLastWeek' => $ordersLastWeek,
            'ordersLastMonth' => $ordersLastMonth,
            'ordersLastYear' => $ordersLastYear,
            'something' => $something,
            'jan' => $jan,
            'feb' => $feb,
            'mar' => $mar,
            'apr' => $apr,
            'may' => $may,
            'jun' => $jun,
            'jul' => $jul,
            'aug' => $aug,
            'sep' => $sep,
            'oct' => $oct,
            'nov' => $nov,
            'dec' => $dec,




        ]);

    // }
    // else{
    //     return redirect()->route('front');
    // }
    }

    // USER FUNCTION

    function users() {
        $user_count = User::count();
        $users = User::orderBy('name','asc')->paginate();
        return view('backend.users.users', [
            'users' => $users,
            'user_count' => $user_count
        ]);
    }



    function customers() {
      $user_count = User::whereHas('roles', function($q){
      $q->where('name', 'subscriber');
      })->count();


      $users = User::whereHas('roles', function($q){
      $q->where('name', 'subscriber');
      })->get();


      return view('backend.users.customer', [
          'users' => $users,
          'user_count' => $user_count
      ]);
    }



    function UsersEdit($id){
        return view('backend.users.user_edit', [
            'users' =>User::where('id', $id)->first()
        ]);
    }

    function UsersUpdate(Request $request){
        $user = User::findOrFail($request->user_id);

        if ($request->hasFile('images')) {
            $image = $request->file('images');

            $ext = Str::random(10).'.'.$image->getClientOriginalExtension();

            $old_img_location = public_path('Pro_images/'. $user->id . '/'. $user->images);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }

            $new_location = public_path('Pro_images/')
            . $user->id . '/';

                File::makeDirectory($new_location, $mode = 0777, true, true);

                Image::make($image)->save($new_location. $ext);



            $user->images = $ext;
        }




            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            return back()->with('success', "User Update Successfull");

    }



    function UsersDelete($id){
      $user_delete = User::findOrFail($id);
      $user_delete->delete();
      return back()->with('delete2', "User Deleted Successfull");
    }

    // ORDERS FUNCTION

    function orders() {

        $order_count = Order::count();

        return view('backend.orders.orders', [
            'orders' => Order::latest()->paginate(10),
            'order_count' => $order_count,
        ]);
    }

    function ExcelDownload(){

        return Excel::download(new OrderExport, 'orders.xlsx');
    }



    public function import(Request $request)
    {
        Excel::import(new OrderImport, $request->file('excel'));

        return back()->with('success', 'All good!');
    }



    function SelectedDateExcelDownload(Request $request){
        $from = $request->start;
        $to = $request->end;

        return Excel::download(new OrderExport($from, $to), 'orders.xlsx');

    }

    function PDFDownload() {
        $orders = Order::all();
        $pdf = PDF::loadView('exports.pdf', [
            'orders' => $orders
        ]);
        return $pdf->download('invoice.pdf');
    }


    function SinglePDFDownload($id){
      $orders = Order::where('id', $id)->get();
      $pdf = PDF::loadView('exports.pdf', [
          'orders' => $orders
      ]);
      return $pdf->download('invoice.pdf');
    }

    function OrdersDelete($id){

      $order = Order::findOrFail($id);
      $order->delete();
      return back()->with('delete1', "Order Deleted Successfully");
    }


    function SelectedOrderDelete(Request $request){
      if($request->order_id != ''){
          foreach($request->order_id as $cat){
              Order::findOrFail($cat)->delete();
          }
          return back();
      }
    }


    // function destroy($id)
    // {
    //
    //     $blog = Blog::findOrFail($id);
    //
    //     $blog->delete();
    //     return back();
    // }


    // function Comments(Request $request)
    // {
    //
    //     $comment = new comment;
    //     $comment->user_id = Auth::id();
    //     $comment->blog_id = $request->blog_id;
    //     $comment->name = $request->name;
    //     $comment->email = $request->email;
    //     $comment->comment = $request->comment;
    //     $comment->save();
    //     return back();
    // }



    function UserReview(Request $request){

        if(ProductReview::where('user_id', Auth::id())->where('product_id', $request->product_id)->exists()){
            return redirect()->route('SingleProduct', $request->product_id)->with('review', "Sorry!! You have allready review this product");
        }
        else{
          $reviews = new ProductReview;
          $reviews->user_id = Auth::id();
          $reviews->product_id = $request->product_id;
          $reviews->rating = $request->rating;
          $reviews->name = $request->name;
          $reviews->email = $request->email;
          $reviews->massage = $request->massage;
          $reviews->save();
          return redirect()->route('SingleProduct', $request->product_id);
        }

    }


    function ShippingList(){

        $shippings = Shipping::latest()->paginate(10);

        return view('backend.shipping.shipping-list', [
            'shippings' => $shippings
        ]);
    }

    function ShippingDelete($id){
        $shipping_del = Shipping::findOrFail($id);
        $shipping_del->delete();
        return back()->with('success', 'Shipping Deleted Successfuly');
    }

    function ShippingSearch(Request $request){
        $shipping = Shipping::query();

        if($request->q){
            $shipping->where('phone','LIKE', "%$request->q%")->orWhere('first_name','LIKE', "%$request->q%")->orWhere('last_name','LIKE', "%$request->q%");
        }

        return view('backend.shipping.search-view', [
            'shipping' => $shipping->get()
        ]);
    }

    function ShippingEdit($id){
        return view('backend.shipping.shipping-edit', [
            'shipping' => Shipping::where('id', $id)->first()
        ]);
    }


    function ShippingUpdate(Request $request){
        $shipping = Shipping::findOrFail($request->shipping_id);
        $shipping->payment_status = $request->payment_status;
        $shipping->status = $request->status;
        $shipping->save();
        return back()->with('success', 'Shipping Status Update Successful');

    }




    function OrderShipment($id){
      $order = Order::findOrFail($id);
      $ord = $order->shipping_id;
      $shipping = Shipping::where('id', $ord)->first();
      return view('backend.orders.order_shipment', [
        'order' => $order,
        'shipping' => $shipping
      ]);
    }


    function SingleClientPDFDownload($id){
      $order = Order::findOrFail($id);
      $ord = $order->shipping_id;
      $shipping = Shipping::where('id', $ord)->first();
      $pdf = PDF::loadView('exports.pdf_single', [
          'order' => $order,
          'shipping' => $shipping
      ]);
      return $pdf->download('invoice.pdf');
    }




    function AllMessage(){
        $msg = message::latest()->paginate();
        return view('backend.message.all_message', [
            'msg' => $msg
        ]);
    }


    function DeleteMessage($id){
        $msg_del = message::findOrFail($id);
        $msg_del->delete();
        return back();
    }


// COLOR SIZE BRAND

    function ColorList(){
      $color = Color::paginate();
      return view('backend/color_brand_size/color', [
        'color' => $color,
        'color_count' => Color::count()
      ]);
    }

    function BrandList(){
      $brand = Brand::paginate();
      return view('backend/color_brand_size/brand', [
        'brand' => $brand,
        'brand_count' => Brand::count()
      ]);
    }

    function SizeList(){
      $size = Size::paginate();
      return view('backend/color_brand_size/size', [
        'size' => $size,
        'size_count' => Size::count()
      ]);
    }


    function ColorAdd(){
      return view('backend/color_brand_size/color_add');
    }


    function BrandAdd(){
      return view('backend/color_brand_size/brand_add');
    }

    function SizeAdd(){
      return view('backend/color_brand_size/size_add');
    }


    function ColorPost(Request $req){

      $search_color = Color::where('color_name', $req->color_name)->count();

      if($search_color > 0){
        return back()->with('delete1', "This Color Already Exists");
      }

      else{
      $color_add = new Color;
      $color_add->color_name = $req->color_name;
      $color_add->slug = Str::slug($req->color_name);
      $color_add->save();
      return back()->with('success', 'Color Added Successfuly');
    }

    }

    function BrandPost(Request $req){




      $search_brand = Brand::where('brand_name', $req->brand_name)->count();

      if($search_brand > 0){
        return back()->with('delete1', "This Brand Already Exists");
      }

      else{

        $image = $req->file('logo');
        $ext = Str::random(10).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path('images/'. $ext));
        Brand::insertGetId([
            'brand_name' => $req->brand_name,
            'slug' => Str::slug($req->brand_name),
            'logo' =>$ext,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', 'Brand Added Successfuly');
      }




    }


    function SizePost(Request $req){

      $search_size = Size::where('size_name', $req->size_name)->count();

      if($search_size > 0){
        return back()->with('delete1', "This Size Already Exists");
      }

      else{
      $size_add = new Size;
      $size_add->size_name = $req->size_name;
      $size_add->slug = Str::slug($req->size_name);
      $size_add->save();
      return back()->with('success', 'Size Added Successfuly');
    }

    }




    function ColorDelete($id){

        $color = Attribute::where('color_id', $id)->count();
        if($color > 0){
            return back()->with('delete1', "You Can't Delete This Color");
        }

        else{
            Color::findOrFail($id)->delete();
            return back()->with('delete2', "Color Deleted Successfully");
        }

    }


    function BrandDelete($id){

        $brand = Product::where('brand_id', $id)->count();
        if($brand > 0){
            return back()->with('delete1', "You Can't Delete This Brand");
        }

        else{
            Brand::findOrFail($id)->delete();
            return back()->with('delete2', "Brand Deleted Successfully");
        }

    }


    function SizeDelete($id){

        $size = Attribute::where('size_id', $id)->count();
        if($size > 0){
            return back()->with('delete1', "You Can't Delete This Size");
        }

        else{
            Size::findOrFail($id)->delete();
            return back()->with('delete2', "Size Deleted Successfully");
        }

    }


    function Color_edit($id){
        $color_edit = Color::where('id', $id)->first();

        return view('backend/color_brand_size/color_edit', [
          'color_edit' => $color_edit
        ]);
    }



    function Brand_edit($id){
        $brand_edit = Brand::where('id', $id)->first();

        return view('backend/color_brand_size/brand_edit', [
          'brand_edit' => $brand_edit
        ]);
    }



    function Size_edit($id){
        $size_edit = Size::where('id', $id)->first();

        return view('backend/color_brand_size/size_edit', [
          'size_edit' => $size_edit
        ]);
    }




    function ColorUpdate(Request $request){
        $color_up = Color::findOrFail($request->id);
        $color_up->color_name = $request->color_name;
        $color_up->slug = Str::slug($request->color_name);
        $color_up->save();

        return back()->with('success', "Color Update Successfully");

    }



    function BrandUpdate(Request $request){
        $brand_up = Brand::findOrFail($request->id);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $ext = Str::random(10).'.'.$image->getClientOriginalExtension();

            if(!empty($brand_up->logo)){
            $old_img_location = public_path('images/'.$brand_up->logo);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }
          }

            Image::make($image)->save(public_path('images/'. $ext));

            $brand_up->logo = $ext;
        }

        $brand_up->brand_name = $request->brand_name;
        $brand_up->slug = Str::slug($request->brand_name);
        $brand_up->save();

        return back()->with('success', "Brand Update Successfully");

    }



    function SizeUpdate(Request $request){
        $size_up = Size::findOrFail($request->id);
        $size_up->size_name = $request->size_name;
        $size_up->slug = Str::slug($request->size_name);
        $size_up->save();

        return back()->with('success', "Size Update Successfully");

    }


    function SelectedShipDelete(Request $request){


     if($request->ship_id != ''){
         foreach($request->ship_id as $cat){
             Shipping::findOrFail($cat)->delete();
         }
         return back()->with('delete2', "Selected Shipping Deleted Successfully");
     }


    }


    function Website(){
      $wesite = Site_Details::all();

      return view('backend/website/web_settings', [
        'wesite' => $wesite
      ]);
    }


    function WebsiteUpdate(Request $request){
      $website = Site_Details::findOrFail($request->id);

      if ($request->hasFile('logo')) {
          $image = $request->file('logo');
          $ext = Str::random(10).'.'.$image->getClientOriginalExtension();

          $old_img_location = public_path('images/'.$website->logo);
          if (file_exists($old_img_location)) {
              unlink($old_img_location);
          }

          Image::make($image)->save(public_path('images/'. $ext));

          $website->logo = $ext;
      }
      $website->service_number = $request->service_number;
      $website->service_email = $request->service_email;
      $website->facebook_link = $request->facebook_link;
      $website->instagram_link = $request->instagram_link;
      $website->save();

      return back()->with('success', "Website Updated Successfully");
    }



    function Coupons(){
      $coupon = Coupon::paginate();
      return view("backend/coupons/coupons", [
        'coupon' => $coupon
      ]);
    }


    function CouponsAdd(){
      return view('backend/coupons/add_coupon');
    }


    function CouponsPost(Request $request){
      $coupon_add = new Coupon;
      $coupon_add->name = $request->name;
      $coupon_add->code = $request->code;
      $coupon_add->validity = $request->validity;
      $coupon_add->discount = $request->discount;
      $coupon_add->level = $request->level;


      $coupon_add->save();
      return back()->with('success', 'Coupon Added Successfuly');
    }


    function Coupon_edit($id){
      $coupon_edit = Coupon::where('id', $id)->first();

      return view('backend/coupons/edit_coupon', [
        'coupon_edit' => $coupon_edit
      ]);

    }

    function CouponUpdate(Request $request){

      $Coupon_up = Coupon::findOrFail($request->id);
      $Coupon_up->name = $request->name;
      $Coupon_up->code = $request->code;
      $Coupon_up->validity = $request->validity;
      $Coupon_up->discount = $request->discount;
      $Coupon_up->level = $request->level;

      $Coupon_up->save();
      return back()->with('success', 'Coupon Updated Successfuly');
    }

    function CouponDelete($id){
      Coupon::findOrFail($id)->delete();
      return back()->with('delete2', "Coupon Deleted Successfully");
    }


    function SelectedCouponDelete(Request $request){


     if($request->coupon_id != ''){
         foreach($request->coupon_id as $coupon){
             Coupon::findOrFail($coupon)->delete();
         }
         return back()->with('delete2', "Selected Coupon Deleted Successfully");
     }


    }



}
