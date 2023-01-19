<?php

use App\Http\Controllers\ProfileController;


use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDeleteRestoreController;

use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;


use App\Http\Controllers\WishController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\BlogController;





use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('backend/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// test for notification alert

// Route::get('/test', [PaymentController::class, 'test']);



// Home
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//Cart Product Update
Route::post('update-to-cart', [CartController::class, 'updatetocart'])->name('updatetocart');

// notification
Route::get('read_notification/{id}', [HomeController::class, 'read_notification']);
Route::get('/get_notification', [HomeController::class, 'getNotification']);

//Search

Route::get('/search', [FrontendController::class, 'Search'])->name('Search');

Route::get('/search', [HomeController::class, 'search'])->name('search');


// Shipping

Route::post('/shipping/update', [HomeController::class, 'ShippingUpdate'])->name('ShippingUpdate');

Route::get('/shipping/list', [HomeController::class, 'ShippingList'])->name('ShippingList');

Route::get('/shipping/delete/{id}', [HomeController::class, 'ShippingDelete'])->name('ShippingDelete');

Route::get('/shipping/search', [HomeController::class, 'ShippingSearch'])->name('ShippingSearch');

Route::get('/shipping/edit/{id}', [HomeController::class, 'ShippingEdit'])->name('ShippingEdit');

Route::get('/order/shipping/{id}', [HomeController::class, 'OrderShipment'])->name('OrderShipment');

Route::post('/selected/ship/delete', [HomeController::class, 'SelectedShipDelete'])->name('SelectedShipDelete');



Route::get('/', [FrontendController::class, 'front'])->name('front');
Route::get('/product/get/review/{product}/{review}', [FrontendController::class, 'GetReview'])->name('GetReview');

Route::get('/checkout', [CheckoutController::class, 'Checkout'])->name('Checkout');

Route::get('/session/get', [CheckoutController::class, 'Checkout_Cart'])->name('Checkout_Cart');

Route::get('/api/get-state-list/{id}', [CheckoutController::class, 'GetState'])->name('GetState');

Route::get('/api/get-city-list/{city_id}', [CheckoutController::class, 'GetCity'])->name('GetCity');

// This will be change as post && get;
Route::match(['get','post'],'/payment', [PaymentController::class, 'payment'])->name('payment');

Route::get('/product/{id}', [FrontendController::class, 'SingleProduct'])->name('SingleProduct');


Route::get('/contact', [TestController::class, 'contact']);
// Auth::routes(['verify' => true]);



// Route::get('/home', 'HomeController@index')->name('home');

// Account
Route::get('/account', [FrontendController::class, 'myAccount']);

// About
Route::get('/about', [FrontendController::class, 'About'])->name('About');

// Contact
Route::get('/contact', [FrontendController::class, 'Contact'])->name('Contact');

// Message
Route::post('/message', [FrontendController::class, 'Message'])->name('Message');
Route::get('/all-message', [HomeController::class, 'AllMessage'])->name('AllMessage');
Route::get('/delete-message/{id}', [HomeController::class, 'DeleteMessage'])->name('DeleteMessage');


// Category
Route::get('/category-list', [CategoryController::class, 'CategoryList'])->name('CategoryList');

Route::get('/category-add', [CategoryController::class, 'CategoryAdd'])->name('CategoryAdd');

Route::post('/category-post', [CategoryController::class, 'CategoryPost'])->name('CategoryPost');

Route::get('/category-edit/{id}', [CategoryController::class, 'Category_edit'])->name('Category_edit');

Route::post('/CategoryUpdate', [CategoryController::class, 'CategoryUpdate'])->name('CategoryUpdate');

Route::get('/category/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('CategoryDelete');

Route::post('/selected/category/delete', [CategoryController::class, 'SelectedCategoryDelete'])->name('SelectedCategoryDelete');


Route::get('/delete-restore', [CategoryDeleteRestoreController::class, 'CategoryDeleteRestore'])->name('CategoryDeleteRestore');

Route::get('/category/restore/{id}', [CategoryController::class, 'CategoryRestore'])->name('CategoryRestore');

Route::get('/category/permanent/{id}', [CategoryController::class, 'PermanentDelete'])->name('PermanentDelete');

Route::get('/category/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('CategoryEdit');

// update route


Route::get('/subcategory-view', [SubCategoryController::class, 'SubCategoryView'])->name('SubCategoryView');

Route::get('/subcategory-from', [SubCategoryController::class, 'SubCategoryFrom'])->name('SubCategoryFrom');

Route::post('/subcategory-post', [SubCategoryController::class, 'SubCategoryPost'])->name('SubCategoryPost');

Route::get('/subcategory-edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('SubCategoryEdit');

Route::post('/subcategory-update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('SubCategoryUpdate');

Route::get('/subcategory-delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('SubCategoryDelete');


Route::get('/scategory/restore/{id}', [SubCategoryController::class, 'SCategoryRestore'])->name('SCategoryRestore');

Route::get('/scategory/permanent/{id}', [SubCategoryController::class, 'SPermanentDelete'])->name('SPermanentDelete');
//User's

Route::get('users', [HomeController::class, 'users'])->name('users');

Route::get('customers', [HomeController::class, 'customers'])->name('customers');

Route::get('users/edit/{id}', [HomeController::class, 'UsersEdit'])->name('UsersEdit');

Route::get('users/delete/{id}', [HomeController::class, 'UsersDelete'])->name('UsersDelete');

Route::post('users/update', [HomeController::class, 'UsersUpdate'])->name('UsersUpdate');


Route::get('products', [ProductController::class, 'products'])->name('products');

Route::get('orders', [HomeController::class, 'orders'])->name('orders');

Route::get('orders/excel/download', [HomeController::class, 'ExcelDownload'])->name('ExcelDownload');

Route::get('orders/pdf/download', [HomeController::class, 'PDFDownload'])->name('PDFDownload');
Route::get('orders/pdf/single/download/{id}', [HomeController::class, 'SinglePDFDownload'])->name('SinglePDFDownload');

Route::get('orders/selected/date/excel/download', [HomeController::class, 'SelectedDateExcelDownload'])->name('SelectedDateExcelDownload');

Route::post('orders/excel/import', [HomeController::class, 'import'])->name('ExcelImport');

Route::get('orders/delete/{id}', [HomeController::class, 'OrdersDelete'])->name('OrdersDelete');

Route::get('orders-client/pdf/single/download/{id}', [HomeController::class, 'SingleClientPDFDownload'])->name('SingleClientPDFDownload');

Route::post('/selected/order/delete', [HomeController::class, 'SelectedOrderDelete'])->name('SelectedOrderDelete');

//Product
Route::get('add/products/add', [ProductController::class, 'ProductAdd'])->name('ProductAdd');

Route::get('products/edit/{id}', [ProductController::class, 'ProductEdit'])->name('ProductEdit');

Route::get('/products/image/edit/{id}', [ProductController::class, 'ProductImageEdit'])->name('ProductImageEdit');

Route::post('products/update', [ProductController::class, 'ProductUpdate'])->name('ProductUpdate');


Route::get('products/delete/{id}', [ProductController::class, 'ProductDelete'])->name('ProductDelete');

Route::post('products-store', [ProductController::class, 'ProductStore'])->name('ProductStore');

Route::get('category/ajax/{id}', [ProductController::class, 'CategoryAjax'])->name('CategoryAjax');

Route::get('gallery-image-delete/{id}', [ProductController::class, 'ImageGalleryDelete'])->name('ImageGalleryDelete');

Route::post('products/image/update', [ProductController::class, 'MultiImageUpdate'])->name('MultiImageUpdate');

Route::get('product/get/size/{color}/{product}', [FrontendController::class, 'GetSize'])->name('GetSize');

Route::get('/delete-restore-product', [ProductController::class, 'ProductDeleteRestore'])->name('ProductDeleteRestore');
Route::get('/product/restore/{id}', [ProductController::class, 'ProductRestore'])->name('ProductRestore');
Route::get('/product/permanent/{id}', [ProductController::class, 'ProPermanentDelete'])->name('ProPermanentDelete');

// Color Size Brand
Route::get('/color_list', [HomeController::class, 'ColorList'])->name('ColorList');
Route::get('/brand_list', [HomeController::class, 'BrandList'])->name('BrandList');
Route::get('/size_list', [HomeController::class, 'SizeList'])->name('SizeList');


Route::get('add/color', [HomeController::class, 'ColorAdd'])->name('ColorAdd');
Route::get('add/brand', [HomeController::class, 'BrandAdd'])->name('BrandAdd');
Route::get('add/size', [HomeController::class, 'SizeAdd'])->name('SizeAdd');



Route::post('/color-post', [HomeController::class, 'ColorPost'])->name('ColorPost');
Route::post('/brand-post', [HomeController::class, 'BrandPost'])->name('BrandPost');
Route::post('/size-post', [HomeController::class, 'SizePost'])->name('SizePost');



Route::get('color-delete/{id}', [HomeController::class, 'ColorDelete'])->name('ColorDelete');
Route::get('brand-delete/{id}', [HomeController::class, 'BrandDelete'])->name('BrandDelete');
Route::get('size-delete/{id}', [HomeController::class, 'SizeDelete'])->name('SizeDelete');



Route::get('/color-edit/{id}', [HomeController::class, 'Color_edit'])->name('Color_edit');
Route::get('/brand-edit/{id}', [HomeController::class, 'Brand_edit'])->name('Brand_edit');
Route::get('/size-edit/{id}', [HomeController::class, 'Size_edit'])->name('Size_edit');


Route::post('/color-update', [HomeController::class, 'ColorUpdate'])->name('ColorUpdate');
Route::post('/brand-update', [HomeController::class, 'BrandUpdate'])->name('BrandUpdate');
Route::post('/size-update', [HomeController::class, 'SizeUpdate'])->name('SizeUpdate');


//Product Review

Route::post('/products/reviews', [HomeController::class, 'UserReview'])->name('UserReview');

// Store Details
Route::get('/store', [StoreController::class, 'Store'])->name('Store');
Route::get('/store-add', [StoreController::class, 'StoreAdd'])->name('StoreAdd');
Route::post('/store-post', [StoreController::class, 'StorePost'])->name('StorePost');
Route::get('/store-edit/{id}', [StoreController::class, 'Store_edit'])->name('Store_edit');
Route::post('/store-update', [StoreController::class, 'StoreUpdate'])->name('StoreUpdate');
Route::get('store-delete/{id}', [StoreController::class, 'StoreDelete'])->name('StoreDelete');

//Cart Page

Route::post('add-to-cart', [CartController::class, 'AddToCart'])->name('AddToCart');

Route::get('cart', [CartController::class, 'Cart'])->name('Cart');
Route::get('cart/{code}', [CartController::class, 'Cart'])->name('CouponValue');
Route::get('cart-data-delete/{id}', [CartController::class, 'CartDataDelete'])->name('CartDataDelete');



// Coupon
Route::get('/coupons', [HomeController::class, 'Coupons'])->name('Coupons');
Route::get('/coupons-add', [HomeController::class, 'CouponsAdd'])->name('CouponsAdd');
Route::post('/coupons-post', [HomeController::class, 'CouponsPost'])->name('CouponsPost');
Route::get('/coupons-edit/{id}', [HomeController::class, 'Coupon_edit'])->name('Coupon_edit');
Route::post('/coupons-update', [HomeController::class, 'CouponUpdate'])->name('CouponUpdate');
Route::get('coupons-delete/{id}', [HomeController::class, 'CouponDelete'])->name('CouponDelete');
Route::post('/selected/coupons/delete', [HomeController::class, 'SelectedCouponDelete'])->name('SelectedCouponDelete');


//Shop Page

Route::get('/shop', [FrontendController::class, 'Shop'])->name('Shop');

// Wish List

Route::get('/wish', [WishController::class, 'WishList'])->name('WishList');
Route::get('/wish-add/{id}/{category_id}/{subcategory_id}/{brand_id}', [WishController::class, 'WishAdd'])->name('WishAdd');
Route::get('wish-product-delete/{id}', [WishController::class, 'WishProductDelete'])->name('WishProductDelete');
Route::post('wish-product-update', [WishController::class, 'WishProductUpdate'])->name('WishProductUpdate');


//Role Management

Route::post('role-add-to-permission', [RoleController::class, 'RoleAddToPermission'])->name('RoleAddToPermission');
Route::post('role-add-to-user', [RoleController::class, 'RoleAddToUser'])->name('RoleAddToUser');
Route::get('change-permission-to-user/{id}', [RoleController::class, 'ChangePermissionToUser'])->name('ChangePermissionToUser');
Route::post('change-permission', [RoleController::class, 'ChangePermission'])->name('ChangePermission');
Route::get('change-permission-to-role/{id}', [RoleController::class, 'ChangePermissionToRole'])->name('ChangePermissionToRole');
Route::post('change-permission-role', [RoleController::class, 'ChangePermissionRole'])->name('ChangePermissionRole');


//Social Login Github  LoginWithGoogle
Route::get('login-with-github', [SocialController::class, 'LoginWithGithub'])->name('LoginWithGithub');
Route::get('callback-url', [SocialController::class, 'GithubCallback'])->name('GithubCallBack');

//Social Login Google
Route::get('login-with-google', [SocialController::class, 'LoginWithGoogle'])->name('LoginWithGoogle');
Route::get('callback-url', [SocialController::class, 'GoogleCallBack'])->name('GoogleCallBack');

Route::post('/comments', [HomeController::class, 'Comments'])->name('Comments');

// WEBSITE SETTINGS

Route::get('/website', [HomeController::class, 'Website'])->name('Website');
Route::post('/website-update', [HomeController::class, 'WebsiteUpdate'])->name('WebsiteUpdate');





//Blog Page


// Route::middleware('auth')->prefix('admin')->group(function(){
//
//
//     Route::resource('blog', [BlogController::class]);
//
//
//
//
// });

Route::get('role-manager', [RoleController::class, 'Role'])->name('Role');




Route::post('blog-update', [BlogController::class, 'Blogupdate'])->name('Blogupdate');
Route::get('blog-destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');



Route::get('/blogs', [FrontendController::class, 'Blogs'])->name('Blogs');
Route::get('/blogs-details/{id}', [FrontendController::class, 'BlogsDetails'])->name('BlogsDetails');







// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
