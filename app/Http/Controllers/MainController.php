<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Compare;
use App\Models\Order;
use App\Models\People;
use App\Models\Subcategory;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\CartInformation;
use App\Models\Review;
use PhpParser\Node\Expr\New_;
use App\Helpers\UserSystemInfoHelper;
use App\Models\LoginHistory;
use Carbon\Carbon;

use Stevebauman\Location\Facades\Location;


class MainController extends Controller
{
    public function home()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_slider = Slider::all();
        $all_product = Product::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }





        return view('Frontend.home', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_category' => $all_category, 'all_slider' => $all_slider, 'all_subcategory' => $all_subcategory, 'all_product' => $all_product], compact('wishlist_count', 'compare_count', 'cart_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'image', 'first_name', 'last_name'));
    }

    public function all_product()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::paginate(15);
        $all_brand = Brand::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }



        $all_review = Review::all();
        $all_review_count = Review::count();

        return view('Frontend.product', ['all_review' => $all_review, 'all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_brand' => $all_brand, 'all_product' => $all_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('wishlist_count', 'compare_count', 'cart_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image', 'all_review_count'));
    }





    public function price_filter(Request $request)
    {
        $max_price = $request->input('price');
        $key = '1000';
        $min_price = ($max_price - $key);

        $product_count = Product::whereBetween('regular_price', [$min_price, $max_price])->count();



        if ($product_count != 0) {

            $product_data = Product::whereBetween('regular_price', [$min_price, $max_price])->get();


            foreach ($product_data as $item) {




                $output = '
    
                <div class="col-lg-4 col-sm-6 grid-control mb-30 ">
        
                    <div class="product-item-2 m-0">
                        <div class="product-item-2-inner wish-buttons-in">
                            <div class="product-thumb">
                                <ul class="wish-react">
                                    <li>
                                        <a href="javascript:void(0)" title="Add To Wishlist" class="add-to-wish-list " data-id="2"><i class="lar la-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Compare" class="add-to-compare " data-id="2"><i class="las la-sync-alt"></i></a>
                                    </li>
                                </ul>
                                
                                <a href="/product/details/' . $item->product_title . ' ">
                                    <img src="images/' . $item->image . ' " height="350px" width="400px" alt="flash">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-before-content">
                                    <h6 class="title">
                                        <a href="#"> ' . $item->product_title . ' </a>
                                    </h6>
                                    <h6 class="title mt-1">
                                        Brand : ' . $item->product_brand . '
                                    </h6>
                                    <div class="single_content">
                                        <p>Washing Instructions Machine wash warm at 40C. Do not bleach. Tumble dry normal low heat. Iron low heat. Dry clean, if needed.
                                            Product Material 99% Cotton 1% Elastane</p>
                                    </div>
                                    <div class="ratings-area justify-content-between">
                                        <div class="ratings">
                                             
                                        </div>
                                        
                                        <div class="price">
                                            ' . $item->regular_price . ' TK 
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="product-after-content">
                                    <button data-product="2" class="cmn-btn btn-sm quick-view-btn" data-toggle="modal" data-target="#product' . $item->id . ' ">
                                        View </button>
                                    <div class="price">
                                       ' . $item->regular_price . ' TK 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                </div>




               

                

                
        
         
                ';

                echo ($output);
            }
        }


        //category
        $category_id = $request->input('category');
        $category_count = Product::where('category_id', $category_id)->count();

        if ($category_count != 0) {
            $product_data = Product::where('category_id', $category_id)->get();

            foreach ($product_data as $item) {

                $output = '
    
            <div class="col-lg-4 col-sm-6 grid-control mb-30 ">
    
                <div class="product-item-2 m-0">
                    <div class="product-item-2-inner wish-buttons-in">
                        <div class="product-thumb">
                            <ul class="wish-react">
                                <li>
                                    <a href="javascript:void(0)" title="Add To Wishlist" class="add-to-wish-list " data-id="2"><i class="lar la-heart"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Compare" class="add-to-compare " data-id="2"><i class="las la-sync-alt"></i></a>
                                </li>
                            </ul>
                            <a href="/product/details/' . $item->product_title . ' ">
                                <img src="images/' . $item->image . ' " height="350px" width="400px" alt="flash">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-before-content">
                                <h6 class="title">
                                    <a href="#"> ' . $item->product_title . ' </a>
                                </h6>
                                <h6 class="title mt-1">
                                    Brand : ' . $item->product_brand . '
                                </h6>
                                <div class="single_content">
                                    <p>Washing Instructions Machine wash warm at 40C. Do not bleach. Tumble dry normal low heat. Iron low heat. Dry clean, if needed.
                                        Product Material 99% Cotton 1% Elastane</p>
                                </div>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                    <div class="price">
                                        ' . $item->regular_price . ' TK.
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="product-after-content">
                                <button data-product="2" class="cmn-btn btn-sm quick-view-btn">
                                    View </button>
                                <div class="price">
                                    $15.00
                                    <del>30.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
    
     
            ';

                echo ($output);
            }
        }













        //brand

        $brand_id = $request->input('brand');

        $brand_count = Product::where('brand_id', $brand_id)->count();

        if ($brand_count != 0) {
            // $product_data = Product::where('brand_id', $brand_id)->get();

            $product_data = Product::where('brand_id', $brand_id)->get();


            foreach ($product_data as $item) {

                $output = '
    
            <div class="col-lg-4 col-sm-6 grid-control mb-30">
    
                <div class="product-item-2 m-0">
                    <div class="product-item-2-inner wish-buttons-in">
                        <div class="product-thumb">
                            <ul class="wish-react">
                                <li>
                                    <a href="javascript:void(0)" title="Add To Wishlist" class="add-to-wish-list " data-id="2"><i class="lar la-heart"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Compare" class="add-to-compare " data-id="2"><i class="las la-sync-alt"></i></a>
                                </li>
                            </ul>
                            <a href="/product/details/' . $item->product_title . ' ">
                                <img src="images/' . $item->image . ' " height="350px" width="400px" alt="flash">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-before-content">
                                <h6 class="title">
                                    <a href="/product/details/' . $item->product_title . ' ">' . $item->product_title . '</a>
                                </h6>
                                <h6 class="title mt-1">
                                    Brand : ' . $item->product_brand . '
                                </h6>
                                <div class="single_content">
                                    <p>Washing Instructions Machine wash warm at 40C. Do not bleach. Tumble dry normal low heat. Iron low heat. Dry clean, if needed.
                                        Product Material 99% Cotton 1% Elastane</p>
                                </div>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                    <div class="price">
                                        ' . $item->regular_price . ' TK.
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="product-after-content">
                                <button data-product="2" class="cmn-btn btn-sm quick-view-btn">
                                    View </button>
                                <div class="price">
                                    $15.00
                                    <del>30.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
    
     
            ';

                echo ($output);
            }
        }
    }

    public function all_brand()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_brand = Brand::paginate('15');

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }



        return view('Frontend.brand', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_category' => $all_category, 'all_brand' => $all_brand, 'all_subcategory' => $all_subcategory], compact('wishlist_count', 'cart_count', 'compare_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'image', 'first_name', 'last_name'));
    }

    public function brand_page($brand_name)
    {

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::all();
        $target_product = Product::where('product_brand', $brand_name)->paginate(15);

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }



        return view('Frontend.brand_show', compact('dashboard', 'profile', 'payment', 'order', 'review', 'cart_count', 'brand_name', 'wishlist_count', 'compare_count', 'image', 'first_name', 'last_name'), ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'all_subcategory' => $all_subcategory, 'target_product' => $target_product, 'all_category' => $all_category]);
    }

    public function filter_price($brand_name, $value)
    {

        $max_price = $value;
        $key = '1000';
        $min_price = ($max_price - $key);

        $target_product_count = Product::where('product_brand', $brand_name)->whereBetween('regular_price', [$min_price, $max_price])->count();
        $target_product = Product::where('product_brand', $brand_name)->whereBetween('regular_price', [$min_price, $max_price])->paginate('15');



        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $category_name = '';

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.filter_product', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_category' => $all_category, 'all_product' => $all_product, 'target_product' => $target_product, 'all_subcategory' => $all_subcategory], compact('wishlist_count', 'brand_name', 'target_product_count', 'compare_count', 'value', 'category_name', 'cart_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image'));
    }

    public function filter_category($brand_name, $category_name)
    {

        $target_product_count = Product::where('product_brand', $brand_name)->where('product_category', $category_name)->count();
        $target_product = Product::where('product_brand', $brand_name)->where('product_category', $category_name)->paginate('15');



        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }


        $value = '';

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.filter_product', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_category' => $all_category, 'all_product' => $all_product, 'target_product' => $target_product, 'all_subcategory' => $all_subcategory], compact('brand_name', 'target_product_count', 'wishlist_count', 'compare_count', 'value', 'category_name', 'cart_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image'));
    }

    public function product_details($title)
    {

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::all();

        $target_product = Product::where('product_title', $title)->get();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }



        return view('Frontend.product_details', ['all_cart' => $all_cart, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_product' => $all_product, 'target_product' => $target_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('cart_count', 'compare_count', 'wishlist_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image'));
    }

    public function content_page()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }


        return view('Frontend.contact', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('cart_count', 'wishlist_count', 'compare_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image'));
    }

    public function home_category($title)
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $target_product = Product::where('product_category', $title)->paginate('15');
        $target_product_count = Product::where('product_category', $title)->count();
        $category_name = $title;
        $all_product = Product::all();
        $all_brand = Brand::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }


        return view('Frontend.home_category_product', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_brand' => $all_brand, 'all_product' => $all_product, 'target_product' => $target_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('cart_count', 'wishlist_count', 'category_name', 'target_product_count', 'compare_count', 'dashboard', 'profile', 'payment', 'order', 'review', 'first_name', 'last_name', 'image'));
    }

    public function product_brand_section($category_name, $brand_name)
    {

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_brand = Brand::all();
        $target_product = Product::where('product_brand', $brand_name)->where('product_category', $category_name)->paginate('15');
        $all_product = Product::all();
        $price_value = '';

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $target_product_count = Product::where('product_brand', $brand_name)->where('product_category', $category_name)->count();

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.product_filter', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'all_brand' => $all_brand, 'target_product' => $target_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('cart_count', 'target_product_count', 'brand_name', 'category_name', 'price_value', 'wishlist_count', 'compare_count', 'dashboard', 'profile', 'order', 'payment', 'review', 'first_name', 'last_name', 'image'));
    }

    public function product_price_filter($category_name, $price_value)
    {
        $max_price = $price_value;
        $key = '1000';
        $min_price = ($max_price - $key);

        $brand_name = '';

        $target_product_count = Product::where('product_category', $category_name)->whereBetween('regular_price', [$min_price, $max_price])->count();

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_brand = Brand::all();
        $all_product = Product::all();
        $target_product = Product::where('product_category', $category_name)->whereBetween('regular_price', [$min_price, $max_price])->paginate('15');

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.product_filter', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'all_brand' => $all_brand, 'target_product' => $target_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('cart_count', 'compare_count', 'wishlist_count', 'category_name', 'brand_name', 'target_product_count', 'price_value', 'dashboard', 'profile', 'order', 'review', 'payment', 'first_name', 'last_name', 'image'));
    }

    public function subcategory_product($subcategory_name)
    {




        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $category_name = '';
        $brand_name = '';
        $price_value = '';
        $all_brand = Brand::all();
        $all_product = Product::all();



        $target_product = Product::where('subcategory_name', $subcategory_name)->paginate('15');
        $target_product_count = Product::where('subcategory_name', $subcategory_name)->count();


        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }


        return view('Frontend.subcategory_filter_product', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'target_product' => $target_product, 'all_brand' => $all_brand, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('compare_count', 'category_name', 'brand_name', 'price_value', 'target_product_count', 'subcategory_name', 'wishlist_count', 'cart_count', 'dashboard', 'profile', 'order', 'review', 'payment', 'first_name', 'last_name', 'image'));
    }

    public function subcategory_product_price_filter($subcat_name, $value)
    {
        $max_price = $value;
        $key = '1000';
        $min_price = ($max_price - $key);

        $subcategory_data = Subcategory::where('subcategory_name', $subcat_name)->get();
        foreach ($subcategory_data as $item) {
            $subcategory_id = $item->id;
        }

        $subcategory_name = $subcat_name;

        $target_product = Product::where('product_subcategory', $subcategory_id)->whereBetween('regular_price', [$min_price, $max_price])->paginate('15');

        $target_product_count = Product::where('product_subcategory', $subcategory_id)->whereBetween('regular_price', [$min_price, $max_price])->count();
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_brand = Brand::all();
        $category_name = '';
        $all_product = Product::all();
        $brand_name = '';

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.subcategory_price_filter', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'target_product' => $target_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_brand' => $all_brand], compact('cart_count', 'subcategory_name', 'compare_count', 'category_name', 'target_product_count', 'value', 'brand_name', 'wishlist_count', 'dashboard', 'profile', 'order', 'review', 'payment', 'first_name', 'last_name', 'image'));
    }

    public function subcategory_filter_brand($subcategory_name, $brand_name)
    {
        $subcategory_data = Subcategory::where('subcategory_name', $subcategory_name)->get();
        foreach ($subcategory_data as $item) {
            $subcategory_id = $item->id;
        }

        $target_product = Product::where('product_brand', $brand_name)->where('product_subcategory', $subcategory_id)->paginate('15');
        $target_product_count = Product::where('product_brand', $brand_name)->where('product_subcategory', $subcategory_id)->count();
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();
        $all_product = Product::all();
        $value = '';
        $all_brand = Brand::all();
        $category_name = '';

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        //Menu Class

        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';
        $support = '';
        $sign = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.subcategory_price_filter', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'target_product' => $target_product, 'all_product' => $all_product, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_brand' => $all_brand], compact('cart_count', 'compare_count', 'wishlist_count', 'value', 'category_name', 'target_product_count', 'subcategory_name', 'brand_name', 'dashboard', 'profile', 'review', 'order', 'payment', 'first_name', 'last_name', 'image'));
    }

    public function product_wishlist($id)
    {
        session()->put('wishlist', 'wishlist');

        $wishlist_count = Wishlist::where('product_id', $id)->count();

        if ($wishlist_count == 0) {
            $product_data = Product::where('id', $id)->get();
            foreach ($product_data as $item) {
                $product_id = $item->id;
                $product_price = $item->regular_price;
                $discount_price = $item->discount_price;
                $product_image = $item->image;
                $product_title = $item->product_title;
            }

            $wishlist = new Wishlist();
            $wishlist->product_id = $product_id;
            $wishlist->product_image = $product_image;
            $wishlist->product_price = $product_price;
            $wishlist->product_title = $product_title;
            $wishlist->discount_price = $discount_price;
            $wishlist->save();
            return redirect()->back()->with('message', 'New Wishlist Product Added Successfully');
        } else {
            return redirect()->back()->with('error', 'This Product Already have Your Wishlist');
        }
    }

    public function product_wishlist_delete($id)
    {
        $delete_wishlist_product = Wishlist::where('id', $id)->delete();
        return redirect()->back()->with('error', 'Wishlist Product Deleted Successfully');
    }

    public function product_compare($id)
    {
        session()->put('compare', 'compare');


        $product_data = Product::where('id', $id)->get();
        foreach ($product_data as $item) {
            $product_category = $item->product_category;
        }


        $compare_count = Compare::count();

        if ($compare_count == 0) {
            $product_data = Product::where('product_category', $product_category)->where('id', $id)->first();
            $product_id = $product_data->id;
            $product_price = $product_data->regular_price;
            $discount_price = $product_data->discount_price;
            $product_image = $product_data->image;
            $product_title = $product_data->product_title;


            $compare = new Compare();
            $compare->product_id = $product_id;
            $compare->product_image = $product_image;
            $compare->product_price = $product_price;
            $compare->product_title = $product_title;
            $compare->discount_price = $discount_price;
            $compare->product_category = $product_category;
            $compare->save();
            return redirect()->back()->with('message', 'Compare Product Added Successfully');
        }

        if ($compare_count > 0 && $compare_count < 4) {
            $compare_count_final = Compare::where('product_category', $product_category)->count();
            if ($compare_count_final == 0) {
                return redirect()->back()->with('error', "Please Try Same Category Product");
            } else {

                $product_data = Product::where('product_category', $product_category)->where('id', $id)->first();

                $product_id = $product_data->id;
                $product_price = $product_data->regular_price;
                $discount_price = $product_data->discount_price;
                $product_image = $product_data->image;
                $product_title = $product_data->product_title;


                $compare = new Compare();
                $compare->product_id = $product_id;
                $compare->product_image = $product_image;
                $compare->product_price = $product_price;
                $compare->product_title = $product_title;
                $compare->discount_price = $discount_price;
                $compare->product_category = $product_category;
                $compare->save();
                return redirect()->back()->with('message', 'Compare Product Added Successfully ');
            }
        } else {
            return redirect()->back()->with('error', 'No More Than 4 Product Compare');
        }
    }

    public function product_compare_show()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }



        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $all_product = Product::all();

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }



        return view('Frontend.product_compare', ['all_cart' => $all_cart, 'all_wishlist' => $all_wishlist, 'all_product' => $all_product, 'all_compare' => $all_compare, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('compare_count', 'wishlist_count', 'cart_count', 'first_name', 'last_name', 'image'));
    }

    public function compare_product_delete($id)
    {

        $delete_compare_product = Compare::where('id', $id)->delete();
        return redirect()->back()->with('error', 'Compare Product Deleted Successfully');
    }

    public function product_cart(Request $request)
    {

        session()->put('cart', 'cart');
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');



        $product_data = Product::where('id', $product_id)->first();

        $product_id = $product_data->id;
        $product_price = $product_data->regular_price;
        $discount_price = $product_data->discount_price;
        $product_image = $product_data->image;
        $product_title = $product_data->product_title;
        $product_category = $product_data->product_category;

        $total_price = ($product_price - $discount_price) * $product_quantity;





        $cart = new Cart();
        $cart->product_id = $product_id;
        $cart->product_image = $product_image;
        $cart->product_price = $product_price;
        $cart->product_title = $product_title;
        $cart->discount_price = $discount_price;
        $cart->product_category = $product_category;
        $cart->product_quantity = $product_quantity;
        $cart->total_price = $total_price;
        $cart->save();

        $sum = 0;

        $all_cart = Cart::all();
        foreach ($all_cart as $item) {
            $total_price = $item->total_price;

            $sum = $sum + $total_price;
        }

        session()->put('sum', $sum);

        return redirect()->back()->with('message', 'Product Addeded To The Cart Successfully');
    }

    public function cart_remove($id)
    {
        $delete_cart = Cart::where('id', $id)->delete();

        $all_cart = Cart::all();
        $sum = 0;
        foreach ($all_cart as $item) {
            $total_price = $item->total_price;
            $sum = $sum + $total_price;
        }

        session()->put('sum', $sum);

        return redirect()->back()->with('error', 'Cart Item Product Deleted Successfully');
    }

    public function all_cart()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $total_amount = 0;

        $cart_data = Cart::all();
        foreach ($cart_data as $item) {
            $total_price = $item->total_price;
            $total_amount = $total_amount + $total_price;
        }



        $dashboard = 'active';
        $profile = '';
        $payment = '';
        $order = '';
        $review = '';

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }




        return view('Frontend.all_cart', ['all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory], compact('wishlist_count', 'compare_count', 'cart_count', 'total_amount', 'image', 'first_name', 'last_name', 'dashboard', 'profile', 'payment', 'order', 'review'));
    }

    public function cart_increment($product_id, $product_quantity)
    {
        $cart_data = Cart::where('product_id', $product_id)->first();
        $id = $cart_data->id;
        $product_quantity = $cart_data->product_quantity;
        $product_price = $cart_data->product_price;
        $discount_price = $cart_data->discount_price;
        $total_price = $cart_data->total_price;

        $product_quantity = $product_quantity + 1;
        $total_price = ($product_price - $discount_price) * $product_quantity;



        $cart_data_edit = Cart::find($id);


        $cart_data_edit->product_quantity = $product_quantity;
        $cart_data_edit->total_price = $total_price;
        $cart_data_edit->save();

        $all_cart = Cart::all();
        $sum = 0;
        foreach ($all_cart as $item) {
            $total_price = $item->total_price;
            $sum = $sum + $total_price;
        }

        session()->put('sum', $sum);
        return redirect()->back();
    }

    public function cart_decrement($product_id, $product_quantity)
    {
        $cart_data = Cart::where('product_id', $product_id)->first();
        $id = $cart_data->id;
        $product_quantity = $cart_data->product_quantity;
        $product_price = $cart_data->product_price;
        $discount_price = $cart_data->discount_price;
        $total_price = $cart_data->total_price;

        $product_quantity = $product_quantity - 1;
        $total_price = ($product_price - $discount_price) * $product_quantity;



        $cart_data_edit = Cart::find($id);


        $cart_data_edit->product_quantity = $product_quantity;
        $cart_data_edit->total_price = $total_price;
        $cart_data_edit->save();

        $all_cart = Cart::all();
        $sum = 0;
        foreach ($all_cart as $item) {
            $total_price = $item->total_price;
            $sum = $sum + $total_price;
        }

        session()->put('sum', $sum);
        return redirect()->back();
    }

    public function cart_login()
    {
        $session_user_name = session()->get('user_name');

        if ($session_user_name != '') {
            $session_dashboard_page = session()->get('dashboard_page');
            if ($session_dashboard_page != '') {
                return redirect('/user/checkout');
            } else {
                return redirect('/user/dashboard');
            }
        } else {

            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            $session_user = session()->get('user_name');

            $people_data = People::where('username', $session_user)->first();

            if ($people_data != '') {
                $image = $people_data->image;
                $first_name = $people_data->firstname;
                $last_name = $people_data->lastname;
            } else {
                $image = '';
                $first_name = '';
                $last_name = '';
            }

            return view('Frontend.cart_login', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_subcategory' => $all_subcategory, 'all_category' => $all_category], compact('wishlist_count', 'cart_count', 'compare_count', 'first_name', 'last_name', 'image'));
        }
    }

    public function cart_register()
    {
        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

        return view('Frontend.cart_register', ['all_cart' => $all_cart, 'all_compare' => $all_compare, 'all_wishlist' => $all_wishlist, 'all_subcategory' => $all_subcategory, 'all_category' => $all_category], compact('wishlist_count', 'cart_count', 'compare_count', 'first_name', 'last_name', 'image'));
    }

    public function cart_register_post(Request $request)
    {
        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        $user_name = $request->input('username');
        $mobile = $request->input('mobile');
        $country = $request->input('country');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        $email_count = People::where('email', $email)->count();
        $user_count = People::where('username', $user_name)->count();

        if (strlen($first_name) > 2) {

            if (strlen($last_name) > 2) {
                if (strlen($user_name) > 4) {
                    if (strlen($password) > 7) {

                        if ($password == $password_confirmation) {
                            if ($email_count == 0) {

                                if ($user_count == 0) {
                                    $people = new People();
                                    $people->firstname = $first_name;
                                    $people->lastname = $last_name;
                                    $people->username = $user_name;
                                    $people->mobile = $mobile;
                                    $people->country = $country;
                                    $people->email = $email;
                                    $people->password = $password;
                                    $people->save();
                                    return redirect('/cart/login')->with('success', 'SignUp Successfully Please Login!!');
                                } else {
                                    return redirect()->back()->with('error', 'This User Name Already Used Try Different');
                                }
                            } else {
                                return redirect()->back()->with('error', 'This Email are already used !!');
                            }
                        } else {
                            return redirect()->back()->with('error', 'Confirm Password Doesnot Match');
                        }
                    } else {
                        return redirect()->back()->with('error', 'Password Length Must Be 8 Character');
                    }
                } else {
                    return redirect()->back()->with('error', 'User Name At Least 5 Character');
                }
            } else {
                return redirect()->back()->with('error', 'Last Name At Least 3 Character');
            }
        } else {
            return redirect()->back()->with('error', 'FirstName At Least 3 Character');
        }
    }

    public function user_dashboard()
    {
        $random_number = Str::random(15);
        session()->put('random_number', $random_number);


        $session_user = session()->get('user_name');
        if ($session_user != '') {
            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            //Menu Class

            $dashboard = 'active';
            $profile = '';
            $payment = '';
            $order = '';
            $review = '';
            $support = '';
            $sign = '';

            $session_user_name = session()->get('user_name');

            $all_cart = Cart::all();




            session()->put('dashboard_page', 'dashboard_page');

            $all_order_count = Order::where('name', $session_user)->count();
            $processing_order_count = Order::where('name', $session_user)->where('status', 'Processing')->count();
            $pending_order_count = Order::where('name', $session_user)->where('status', 'Pending')->count();
            $faild_order_count = Order::where('name', $session_user)->where('status', 'Failed')->count();

            $people_data = People::where('username', $session_user)->first();
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;


            return view('Frontend.user_dashboard', ['all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'support', 'sign', 'wishlist_count', 'compare_count', 'cart_count', 'all_order_count', 'processing_order_count', 'pending_order_count', 'faild_order_count', 'image', 'first_name', 'last_name'));
        } else {
            return redirect()->back();
        }
    }

    public function cart_login_post(Request $request)
    {
        $user_name = $request->input('username');
        $password = $request->input('password');

        $people_count = People::where('username', $user_name)->where('password', $password)->count();
        if ($people_count == 1) {
            session()->put('user_name', $user_name);

            $getip = UserSystemInfoHelper::get_ip();
            $getbrowser = UserSystemInfoHelper::get_browsers();
            $getdevice = UserSystemInfoHelper::get_device();
            $getos = UserSystemInfoHelper::get_os();
            $login_time = Carbon::now()->toDateTimeString();
            

           

           

           

            $login_history = New LoginHistory();
            $login_history->username = $user_name;
            $login_history->ip = $getip;
            $login_history->browser = $getbrowser;
            $login_history->device = $getdevice;
            $login_history->os = $getos;
            $login_history->login_time = $login_time;
            $login_history->save();

            $login_history_data = LoginHistory::where('username',$user_name)->get();
            foreach($login_history_data as $item)
            {
                $target_id = $item->id;
                $created_at = $item->created_at;

            }
           

            $time =  $created_at->diffForHumans();
           

            $edit_data = LoginHistory::find($target_id);
            $edit_data->time = $time;
            $edit_data->save();

            return redirect('/user/dashboard')->with('message', 'Login Successfully !! Welcome To ' . $user_name);
        } else {
            return redirect()->back()->with('error', 'Error Your User Name Or Password');
        }
    }

    public function user_profile_setting()
    {

        $session_user_name  = session()->get('user_name');

        if ($session_user_name != '') {

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            //Menu Class

            $dashboard = '';
            $profile = 'active';
            $payment = '';
            $order = '';
            $review = '';
            $support = '';
            $sign = '';

            $people_data = People::where('username', $session_user_name)->first();
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
            $email = $people_data->email;
            $country = $people_data->country;
            $mobile = $people_data->mobile;
            $city = $people_data->city;
            $zip = $people_data->zip;
            $state = $people_data->state;
            $address  = $people_data->address;
            $image = $people_data->image;

            return view('Frontend.profile_setting', ['all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'support', 'sign', 'wishlist_count', 'compare_count', 'cart_count', 'first_name', 'last_name', 'email', 'mobile', 'country', 'city', 'zip', 'state', 'address', 'image'));
        } else {
            return redirect()->back();
        }
    }

    public function user_payment_history()
    {

        $session_user_name  = session()->get('user_name');

        if ($session_user_name != '') {

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            //Menu Class

            $dashboard = '';
            $profile = '';
            $payment = 'active';
            $order = '';
            $review = '';
            $support = '';
            $sign = '';

            $people_data = People::where('username', $session_user_name)->first();
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;

            $all_cart_information = CartInformation::where('user_name', $session_user_name)->get();
            $all_cart_information_count = CartInformation::where('user_name', $session_user_name)->count();
            $all_order = Order::all();

            return view('Frontend.payment_history', ['all_order' => $all_order, 'all_cart_information' => $all_cart_information, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'support', 'sign', 'wishlist_count', 'compare_count', 'cart_count', 'first_name', 'last_name', 'image', 'all_cart_information_count'));
        } else {
            return redirect()->back();
        }
    }

    public function user_order()
    {

        $session_user_name  = session()->get('user_name');

        if ($session_user_name != '') {

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            //Menu Class

            $dashboard = '';
            $profile = '';
            $payment = '';
            $order = 'active';
            $review = '';
            $support = '';
            $sign = '';

            $people_data = People::where('username', $session_user_name)->first();
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;

            return view('Frontend.user_order', ['all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'support', 'sign', 'wishlist_count', 'compare_count', 'cart_count', 'image', 'first_name', 'last_name'));
        } else {
            return redirect()->back();
        }
    }


    public function user_product_review()
    {

        $session_user_name  = session()->get('user_name');

        if ($session_user_name != '') {

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            //Menu Class

            $dashboard = '';
            $profile = '';
            $payment = '';
            $order = '';
            $review = 'active';
            $support = '';
            $sign = '';

            $people_data = People::where('username', $session_user_name)->first();
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;

            $all_cart_information = CartInformation::where('user_name', $session_user_name)->get();
            $all_cart_information_count = CartInformation::where('user_name', $session_user_name)->count();

            return view('Frontend.user_product_review', ['all_cart_information' => $all_cart_information, 'all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'support', 'sign', 'wishlist_count', 'compare_count', 'cart_count', 'first_name', 'last_name', 'image', 'all_cart_information_count'));
        } else {
            return redirect()->back();
        }
    }

    public function user_checkout()
    {
        $session_user_name = session()->get('user_name');
        if ($session_user_name != '') {
            $all_category = Category::all();
            $all_subcategory = Subcategory::all();

            $all_wishlist = Wishlist::all();
            $wishlist_count = Wishlist::count();

            $wishlist_session = session()->get('wishlist');

            if ($wishlist_session == '') {

                foreach ($all_wishlist as $item) {
                    $id = $item->id;
                    $delete_data = Wishlist::where('id', $id)->delete();
                }
            } else {
            }

            $all_compare = Compare::all();
            $compare_count = Compare::count();

            $compare_session = session()->get('compare');

            if ($compare_session == '') {

                foreach ($all_compare as $item) {
                    $id = $item->id;
                    $delete_data = Compare::where('id', $id)->delete();
                }
            } else {
            }

            $all_cart = Cart::all();
            $cart_count = Cart::count();

            $cart_session = session()->get('cart');

            if ($cart_session == '') {

                foreach ($all_cart as $item) {
                    $id = $item->id;
                    $delete_data = Cart::where('id', $id)->delete();
                }
            } else {
            }

            //Menu Class

            $dashboard = 'active';
            $profile = '';
            $payment = '';
            $order = '';
            $review = '';
            $support = '';
            $sign = '';

            $target_user_data = People::where('username', $session_user_name)->first();


            $first_name = $target_user_data->firstname;
            $last_name = $target_user_data->lastname;
            $email = $target_user_data->email;
            $mobile = $target_user_data->mobile;
            $country = $target_user_data->country;
            $user_name = $target_user_data->username;


            $sum = 0;

            foreach ($all_cart as $item) {
                $total_price = $item->total_price;
                $sum = $sum + $total_price;
            }

            $session_user = session()->get('user_name');

            $people_data = People::where('username', $session_user)->first();

            if ($people_data != '') {
                $image = $people_data->image;
                $first_name = $people_data->firstname;
                $last_name = $people_data->lastname;
            } else {
                $image = '';
                $first_name = '';
                $last_name = '';
            }





            return view('Frontend.payment_checkout', ['all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('dashboard', 'profile', 'payment', 'order', 'review', 'cart_count', 'wishlist_count', 'compare_count', 'first_name', 'last_name', 'email', 'mobile', 'country', 'total_price', 'user_name', 'sum', 'image'));
        } else {
            return redirect()->back();
        }
    }

    public function ajax_shipping_method(Request $request)
    {
        $shipping_value = $request->input('shipping_value');

        $all_cart = Cart::all();

        $sum = 0;

        foreach ($all_cart as $item) {
            $total_price = $item->total_price;
            $total_price = $sum + $total_price;
        }

        $additional_price = $total_price + 50;

        if ($shipping_value == 1) {

            $output = '

            <div class="payment-details">
            <h4 class="title text-center">Payment Details</h4>
            <ul>
                <li>
                    <span class="subtitle">Subtotal</span>
                    <span class="text-success" id="cartSubtotal"> ' . $total_price . ' TK.</span>
                </li>
                <li>
                    <span class="subtitle">Shipping Charge</span>
                    <span class="text-danger" id="shippingCharge"> 0 TK.</span>
                </li>
                <li class="border-0">
                    <span class="subtitle bold">Total</span>
                    <span class="cl-title" id="cartTotal"> ' . $total_price . ' TK.</span>
                </li>
            </ul>
            <p id="shipping-details">
    
            </p>
        </div>
            
            ';

            echo ($output);
        } else {

            $output = '

            <div class="payment-details">
            <h4 class="title text-center">Payment Details</h4>
            <ul>
                <li>
                    <span class="subtitle">Subtotal</span>
                    <span class="text-success" id="cartSubtotal"> ' . $total_price . ' TK.</span>
                </li>
                <li>
                    <span class="subtitle">Shipping Charge</span>
                    <span class="text-danger" id="shippingCharge"> 50 TK.</span>
                </li>
                <li class="border-0">
                    <span class="subtitle bold">Total</span>
                    <span class="cl-title" id="cartTotal"> ' . $additional_price . ' TK.</span>
                </li>
            </ul>
            <p id="shipping-details">
    
            </p>
        </div>
            
            ';

            echo ($output);
        }
    }

    public function cart_password_reset()
    {

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        return view('Frontend.reset_password', ['all_category' => $all_category, 'all_subcategory' => $all_subcategory, 'all_wishlist' => $all_wishlist, 'all_compare' => $all_compare, 'all_cart' => $all_cart], compact('wishlist_count', 'compare_count', 'cart_count'));
    }

    public function cart_password_reset_post(Request $request)
    {
        $email = $request->input('email');

        $people_count = People::where('email', $email)->count();

        if ($people_count == 1) {

            $password = Str::random(10);
            $people_data = People::where('email', $email)->first();
            $person_id = $people_data->id;

            $edit_people = People::find($person_id);
            $edit_people->password = $password;
            $edit_people->save();
            $data = array(
                'email' => $email,
                'password' => $password
            );

            Mail::to($email)->send(new SendMail($data));
            return redirect('/cart/login')->with('message', 'Your Password is Send Your Email Please Check');
        } else {
            return redirect()->back()->with('error', 'This Email is Not Exist Please Try to Valid One');
        }
    }

    public function user_profile_setting_post(Request $request)
    {
        $session_user_name = $request->input('session_user_name');
        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        $email = $request->input('email');
        $country = $request->input('country');
        $city = $request->input('city');
        $state = $request->input('state');
        $zip = $request->input('zip');
        $mobile = $request->input('mobile');
        $address  = $request->input('address');

        $collect_session_data = People::where('username', $session_user_name)->first();
        $session_id = $collect_session_data->id;

        $people_data = People::find($session_id);
        $people_data->firstname = $first_name;
        $people_data->lastname = $last_name;
        $people_data->email = $email;
        $people_data->country = $country;
        $people_data->city = $city;
        $people_data->state = $state;
        $people_data->zip = $zip;
        $people_data->mobile = $mobile;
        $people_data->address = $address;
        $people_data->save();
        return redirect()->back()->with('message', 'User Profile Data Edited Successfully');
    }

    public function user_profile_picture(Request $request)
    {
        $session_user = $request->input('session_user_name');
        $people_data = People::where('username', $session_user)->first();
        $session_id = $people_data->id;

        $people_find = People::find($session_id);

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $people_find->image = $image;
        $people_find->save();
        return redirect()->back()->with('message', 'Profile Image Updated Successfully');
    }

    public function product_review_rating(Request $request)
    {
        $session_user_name = $request->input('user_name');
        $product_id = $request->input('product_id');
        $product_review = $request->input('review');

        $review_data = new Review();
        $review_data->product_id = $product_id;
        $review_data->review = $product_review;
        $review_data->user_name = $session_user_name;
        $review_data->save();

        $product_review_count = Review::where('product_id', $product_id)->count();



        $all_review_rating_number_count = Review::where('product_id', $product_id)->count();
        $all_review_score = Review::where('product_id', $product_id)->get();
        $sum = 0;
        foreach ($all_review_score as $item) {
            $review = $item->review;
            $sum = $sum + $review;
        }

        $final_review_score = ceil($sum / $all_review_rating_number_count);

        $product_data = Product::all();
        foreach ($product_data as $item) {
            if ($item->id == $product_id) {
                $product = Product::find($product_id);
                $product->review_count = $product_review_count;
                $product->review_score = $final_review_score;
                $product->save();
            }
        }

        return redirect()->back()->with('message', 'Product Review Update Successfully');
    }

    public function product_search(Request $request)
    {
        $search_data = $request->input('search_data');

        $search_subcat_count = Product::where('subcategory_name',$search_data)->count();
        $search_cat_count = Product::where('product_category',$search_data)->count();

        if($search_subcat_count >= 1)
        {
            $search_value = Product::where('subcategory_name',$search_data)->paginate('15');
           

        }else{
           
            $search_value = Product::where('product_category',$search_data)->paginate('15');
           
        }

        $all_wishlist = Wishlist::all();
        $wishlist_count = Wishlist::count();

        $wishlist_session = session()->get('wishlist');

        if ($wishlist_session == '') {

            foreach ($all_wishlist as $item) {
                $id = $item->id;
                $delete_data = Wishlist::where('id', $id)->delete();
            }
        } else {
        }

        $all_compare = Compare::all();
        $compare_count = Compare::count();

        $compare_session = session()->get('compare');

        if ($compare_session == '') {

            foreach ($all_compare as $item) {
                $id = $item->id;
                $delete_data = Compare::where('id', $id)->delete();
            }
        } else {
        }

        $all_cart = Cart::all();
        $cart_count = Cart::count();

        $cart_session = session()->get('cart');

        if ($cart_session == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }

        $title = 'Viser - Product Search';

        $all_category = Category::all();
        $all_subcategory = Subcategory::all();

        $all_product = Product::all();

        $session_user = session()->get('user_name');

        $people_data = People::where('username', $session_user)->first();

        if ($people_data != '') {
            $image = $people_data->image;
            $first_name = $people_data->firstname;
            $last_name = $people_data->lastname;
        } else {
            $image = '';
            $first_name = '';
            $last_name = '';
        }

         //Menu Class

         $dashboard = 'active';
         $profile = '';
         $payment = '';
         $order = '';
         $review = '';
         $support = '';
         $sign = '';

        return view('Frontend.search_product', ['all_product'=>$all_product,'all_category'=>$all_category,'all_subcategory'=>$all_subcategory, 'search_value'=>$search_value], compact('search_subcat_count','search_cat_count','all_wishlist','wishlist_count','all_cart','cart_count','all_compare','compare_count','title','image','first_name','last_name','dashboard','profile', 'payment', 'order','review','support','sign'));

    }








    public function user_logout()
    {
        Session::forget('user_name', 'dashboard_page', 'random_number');
        Session::forget('cart');

        $all_cart = Cart::all();

        $session_cart = session()->get('cart');

        if ($session_cart == '') {

            foreach ($all_cart as $item) {
                $id = $item->id;
                $delete_data = Cart::where('id', $id)->delete();
            }
        } else {
        }



        return redirect('/cart/login');
    }
}
