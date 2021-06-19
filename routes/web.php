<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserSystemInfoController;
use Illuminate\Support\Facades\App;

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



//Main Controller

Route::get('/', [MainController::class, 'home']);
Route::get('/product', [MainController::class, 'all_product']);
Route::get('/product/page/{id}', [MainController::class, 'page_product']);
Route::post('/brand_filter', [MainController::class, 'brand_filter']);
Route::post('/category_filter', [MainController::class, 'category_filter']);
Route::post('/price_filter', [MainController::class, 'price_filter']);
Route::get('/brands', [MainController::class, 'all_brand']);
Route::get('/brands/{brand_name}', [MainController::class, 'brand_page']);
Route::get('/product/filter/{brand_name}/price/{value}', [Maincontroller::class, 'filter_price']);
Route::get('/product/filter/{brand_name}/category/{value}', [MainController::class, 'filter_category']);
Route::get('/product/details/{title}', [MainController::class, 'product_details']);
Route::get('/contact', [MainController::class, 'content_page']);
Route::get('/product/category/{title}', [MainController::class, 'home_category']);
Route::get('/product/{category_name}/brand/{brand_name}', [MainController::class, 'product_brand_section']);
Route::get('/product/category/{category_name}/price/{value}', [MainController::class, 'product_price_filter']);
Route::get('/product/subcategory/{subcategory_name}', [MainController::class, 'subcategory_product']);
Route::get('/product/subcategory/{subcat_name}/price/{value}', [MainController::class, 'subcategory_product_price_filter']);
Route::get('/product/subcategory/{subcategory_name}/filter/{brand_name}', [MainController::class, 'subcategory_filter_brand']);
Route::get('/product/wishlist/{id}', [MainController::class, 'product_wishlist']);
Route::get('/wishlist/product/delete/{id}', [MainController::class, 'product_wishlist_delete']);
Route::get('/product/compare/{id}', [MainController::class, 'product_compare']);
Route::get('/product/compare', [MainController::class, 'product_compare_show']);
Route::get('/compare/product/delete/{id}', [MainController::class, 'compare_product_delete']);
Route::post('/product/cart', [MainController::class, 'product_cart']);
Route::get('/product/all_cart', [MainController::class, 'all_cart']);
Route::get('/product/cart/remove/{id}', [Maincontroller::class, 'cart_remove']);
Route::get('/cart/{product_id}/increment/{product_quantity}', [MainController::class, 'cart_increment']);
Route::get('/cart/{product_id}/decrement/{product_quantity}', [MainController::class, 'cart_decrement']);
Route::get('/cart/login', [MainController::class, 'cart_login']);
Route::get('/cart/register', [MainController::class, 'cart_register']);
Route::post('/cart/register_post', [MainController::class, 'cart_register_post']);
Route::post('/cart/login_post', [MainController::class, 'cart_login_post']);
Route::get('/user/dashboard', [MainController::class, 'user_dashboard']);
Route::get('/user/logout', [MainController::class, 'user_logout']);
Route::get('/user/profile-setting', [MainController::class, 'user_profile_setting']);
Route::get('/user/payment/history', [Maincontroller::class, 'user_payment_history']);
Route::get('/user/order', [MainController::class, 'user_order']);
Route::get('/user/product/review', [MainController::class, 'user_product_review']);
Route::get('/user/checkout', [MainController::class, 'user_checkout']);
Route::post('/ajax/shipping_method', [MainController::class, 'ajax_shipping_method']);
Route::get('/cart/password/reset', [MainController::class, 'cart_password_reset']);
Route::post('/cart/password/reset', [MainController::class, 'cart_password_reset_post']);
Route::post('/user/profile_setting', [MainController::class, 'user_profile_setting_post']);
Route::post('/user/profile/picture', [MainController::class, 'user_profile_picture']);
Route::post('/product_review_rating', [MainController::class, 'product_review_rating']);

//search
Route::get('/visermart/products/search', [MainController::class, 'product_search']);


// SSLCOMMERZ Start
//Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END




//Admin Controller
Route::get('/admin/login', [AdminController::class, 'admin_home']);
Route::post('/admin_login/post', [AdminController::class, 'admin_login_post']);
Route::get('/admin/logout', [AdminController::class, 'admin_logout']);

Route::group(['middleware' => ['CustomAuth']], function () {

    Route::get('/admin/dashboard/lang/{locale}', [AdminController::class, 'language_change']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/customers', [AdminController::class, 'customers']);
    Route::get('/admin/customer/detail/{name}', [AdminController::class, 'customer_details']);
    Route::get('/admin/customer/active_customer', [AdminController::class, 'active_customer']);
    Route::get('/admin/customer/banned_customer', [AdminController::class, 'banned_customer']);
    Route::get('/admin/customer/email_unverified', [AdminController::class, 'email_unverified']);
    Route::get('/admin/customer/sms_unverified', [AdminController::class, 'sms_unverified']);
    Route::get('/admin/customer/login_history', [AdminController::class, 'login_history']);
    Route::get('/admin/customer/send_email', [AdminController::class, 'send_email']);
    Route::get('admin/dashboard/customer/login_history/{name}', [AdminController::class, 'customer_login_history']);
    Route::get('/admin/dashboard/customer/send_email/{user_name}', [AdminController::class, 'customer_send_email']);
    Route::post('/admin/customer/send/email', [AdminController::class, 'customer_post_email']);
    Route::post('/admin/allcustomers/send_email', [AdminController::class, 'allcustomers_email']);
    Route::get('/admin/payment', [AdminController::class, 'admin_all_payment']);

    Route::get('/admin/product/categories', [AdminController::class, 'product_category']);
    Route::get('/admin/product/add_category', [AdminController::class, 'add_category_show']);
    Route::post('/admin/product/add_category', [AdminController::class, 'add_category']);
    Route::get('/admin/product/categories/edit/{id}', [AdminController::class, 'edit_category_show']);
    Route::get('/admin/product/categories/delete/{id}', [AdminController::class, 'delete_category']);
    Route::post('/admin/product/edit/category', [AdminController::class, 'edit_category']);

    Route::get('/admin/product/add_subcategory', [AdminController::class, 'add_subcategory_show']);
    Route::post('/admin/product/add_subcategory', [AdminController::class, 'add_subcategory']);
    Route::get('/admin/product/edit_subcategory/{id}', [AdminController::class, 'edit_subcategory_show']);
    Route::post('/admin/product/edit_subcategory', [AdminController::class, 'edit_subcategory']);
    Route::get('/admin/product/delete_subcategory/{id}', [AdminController::class, 'delete_subcategory']);
    Route::get('/admin/product/slider/{id}', [AdminController::class, 'subcategory_slider']);

    Route::get('/admin/product/brands', [AdminController::class, 'product_brand']);
    Route::get('/admin/product/add_brand', [AdminController::class, 'add_brand_show']);
    Route::post('/admin/product/add_brand', [AdminController::class, 'add_brand']);
    Route::get('/admin/product/brands/edit/{id}', [AdminController::class, 'edit_brand_show']);
    Route::post('/admin/product/edit/brand', [AdminController::class, 'edit_brand']);
    Route::get('/admin/product/brands/top/{id}', [AdminController::class, 'top_brand']);
    Route::get('/admin/product/brands/delete/{id}', [AdminController::class, 'delete_brand']);

    Route::get('/admin/product/slider', [Admincontroller::class, 'product_slider']);
    Route::post('/admin/product/add_slider', [AdminController::class, 'add_slider']);
    Route::get('/admin/product/slider/edit/{id}', [AdminController::class, 'edit_slider_show']);
    Route::post('/admin/product/edit_slider', [AdminController::class, 'edit_slider']);
    Route::get('/admin/product/slider/delete/{id}', [AdminController::class, 'delete_slider']);
    Route::get('/admin/product/slider/status/{id}', [AdminController::class, 'slider_status']);


    Route::get('/admin/product/attribute-types', [AdminController::class, 'product_attribute']);

    Route::get('/admin/product/all_product', [AdminController::class, 'all_product']);
    Route::get('/admin/product/add_product', [AdminController::class, 'add_product_show']);
    Route::post('/admin/product/add_product', [AdminController::class, 'add_product']);
    Route::post('/admin_ajax_product_category', [AdminController::class, 'admin_ajax_product_category']);
    Route::post('/admin/product/add_product', [AdminController::class, 'add_product']);
    Route::get('/admin/product/advertise/{id}', [AdminController::class, 'product_advertise']);
    Route::get('/admin/product/edit/{id}', [AdminController::class, 'product_edit_show']);
    Route::post('/admin/product/edit_product', [AdminController::class, 'edit_product']);
    Route::get('/admin/product/delete/{id}', [AdminController::class, 'delete_product']);
    Route::get('/admin/product/featured/{id}', [AdminController::class, 'featured_product']);
    Route::get('/admin/product/discount/{id}', [AdminController::class, 'discount_product']);
    Route::get('/admin/product/speciality/{id}', [AdminController::class, 'product_speciality']);


    Route::get('/admin/product/reviews', [AdminController::class, 'product_reviews']);
    Route::get('/admin/promotion/coupons', [AdminController::class, 'promotion_cupons']);
    Route::get('/admin/promotion/offers', [AdminController::class, 'promotion_offers']);
    Route::get('admin/promotion/subscriber', [AdminController::class, 'promotion_subscriber']);
});

