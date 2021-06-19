<?php

namespace App\Http\Controllers;

use App\Mail\AllCustomerEmail;
use App\Models\Brand;
use App\Models\CartInformation;
use App\Models\Category;
use App\Models\Icon;
use App\Models\LoginHistory;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\People;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\CustomerMail;
use App\Mail\AllCustomerMail;
use App\Models\Admin;
use App\Models\Review;
use Mail;
use Illuminate\Support\Facades\App;
use Session;

class AdminController extends Controller
{

    public function admin_home()
    {
        $title = "Admin | Login";
        return view('Admin.admin', compact('title'));
    }

    public function admin_login_post(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $password = md5($password);

        $admin_count = Admin::where('username',$username)->where('password',$password)->count();
        if($admin_count==1)
        {
            session()->put('admin','admin');
            return redirect('/admin/dashboard')->with('message', 'Log In Successfully Welcome To Admin');
        }else{
            return redirect()->back()->with('error','Error Username Or Password');
        }
        
    }

    public function admin_logout()
    {
        Session::forget('lang');
        Session::forget('admin');

       return redirect('/admin/login');
    }

    public function language_change($locale)
    {
        session()->put('lang', $locale);
        $lang = session()->get('lang');

        App::setLocale($lang);

        $title = 'Dashboard';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $dashboard = 'active';
        $customers = '';
        $customer_active = '';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu = '';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $all_order_count = Order::count();

        $order_data = Order::all();
        $sum = 0;
        foreach ($order_data as $item) {
            $amount = $item->amount;
            $sum = $amount + $sum;
        }

        $all_product_count = Product::count();

        $all_people_count = People::count();

        $date = \Carbon\Carbon::today()->subDays(7);
        $last_seven_days_data = CartInformation::where('created_at', '>=', $date)->get();

        $sum1 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum1 = $sum1 + $total_price;
        }

        $date1 = \Carbon\Carbon::today()->subDays(15);

        $last_fifteen_days_data = CartInformation::where('created_at', '>=', $date1)->get();

        $sum2 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum2 = $sum2 + $total_price;
        }

        $date2 = \Carbon\Carbon::today()->subDays(30);

        $last_fifteen_days_data = CartInformation::where('created_at', '>=', $date2)->get();

        $sum3 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum3 = $sum3 + $total_price;
        }

        $top_products = Product::orderBy('sell', 'desc')->take(6)->get();
        $top_order = Order::orderBy('amount', 'desc')->take(6)->get();

        $all_people = People::all();

        return view('Admin.dashboard', ['all_people' => $all_people, 'top_order' => $top_order, 'top_products' => $top_products], compact('sum3', 'sum1', 'sum2', 'all_people_count', 'all_product_count', 'sum', 'all_order_count', 'title', 'slider', 'subscriber', 'cupons', 'offers', 'sidebar_promotion_sub_menu', 'sidebar_promotion_menu', 'product_reviews', 'all_product', 'attribute', 'brand', 'category', 'sidebar_product_sub_menu', 'sidebar_product_menu', 'login', 'sms', 'unverified_email', 'banned_customer', 'send_email', 'sidebar_menu', 'sidebar_sub_menu', 'dashboard', 'customers', 'customer_active'));
    }

    public function dashboard()
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Dashboard';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $dashboard = 'active';
        $customers = '';
        $customer_active = '';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu = '';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $all_order_count = Order::count();

        $order_data = Order::all();
        $sum = 0;
        foreach ($order_data as $item) {
            $amount = $item->amount;
            $sum = $amount + $sum;
        }

        $all_product_count = Product::count();

        $all_people_count = People::count();

        $date = \Carbon\Carbon::today()->subDays(7);
        $last_seven_days_data = CartInformation::where('created_at', '>=', $date)->get();

        $sum1 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum1 = $sum1 + $total_price;
        }

        $date1 = \Carbon\Carbon::today()->subDays(15);

        $last_fifteen_days_data = CartInformation::where('created_at', '>=', $date1)->get();

        $sum2 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum2 = $sum2 + $total_price;
        }

        $date2 = \Carbon\Carbon::today()->subDays(30);

        $last_fifteen_days_data = CartInformation::where('created_at', '>=', $date2)->get();

        $sum3 = 0;
        foreach ($last_seven_days_data as $item) {
            $total_price = $item->total_price;
            $sum3 = $sum3 + $total_price;
        }

        $top_products = Product::orderBy('sell', 'desc')->take(6)->get();
        $top_order = Order::orderBy('amount', 'desc')->take(6)->get();

        $all_people = People::all();

        return view('Admin.dashboard', ['all_people' => $all_people, 'top_order' => $top_order, 'top_products' => $top_products], compact('sum3', 'sum1', 'sum2', 'all_people_count', 'all_product_count', 'sum', 'all_order_count', 'title', 'slider', 'subscriber', 'cupons', 'offers', 'sidebar_promotion_sub_menu', 'sidebar_promotion_menu', 'product_reviews', 'all_product', 'attribute', 'brand', 'category', 'sidebar_product_sub_menu', 'sidebar_product_menu', 'login', 'sms', 'unverified_email', 'banned_customer', 'send_email', 'sidebar_menu', 'sidebar_sub_menu', 'dashboard', 'customers', 'customer_active'));
    }

    public function customers()
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'All | Customer';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers = 'active';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu='';
        $category = '';
        $brand = '';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $all_people = People::all();

        return view('Admin.customers', ['all_people'=>$all_people], compact('subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','title','login','sms','unverified_email','banned_customer','send_email','sidebar_menu','sidebar_sub_menu','dashboard','customers','customer_active'));
    }

    public function customer_details($name)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Customer | Details';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers = 'active';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu='';
        $category = '';
        $brand = '';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $people_data = People::where('username',$name)->first();
        $first_name = $people_data->firstname;
        $last_name = $people_data->lastname;
        $email = $people_data->email;
        $mobile = $people_data->mobile;
        $address = $people_data->address;
        $city = $people_data->city;
        $state = $people_data->state;
        $zip = $people_data->zip;
        $country = $people_data->country;
        $image = $people_data->image;
        $user_name = $people_data->username;

        $order_data = Order::where('name',$name)->get();
        $order_count = Order::where('name',$name)->count();
        $sum = 0;
        foreach($order_data as $item)
        {
            $amount = $item->amount;
            $sum = $sum + $amount;
        }

        return view('Admin.customer_details',compact('user_name','image','order_count','sum','country','zip','state','city','address','mobile','email','first_name','last_name','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','title','login','sms','unverified_email','banned_customer','send_email','sidebar_menu','sidebar_sub_menu','dashboard','customers','customer_active'));
    }

    public function customer_login_history($name)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Customer | Login | History';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers = 'active';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu='';
        $category = '';
        $brand = '';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $login_history = LoginHistory::all();

       
        
        return view('Admin.customer_login_history', ['login_history'=>$login_history], compact('name','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','title','login','sms','unverified_email','banned_customer','send_email','sidebar_menu','sidebar_sub_menu','dashboard','customers','customer_active'));
    }

    public function customer_send_email($username)
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Send Email';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers = 'active';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $sms = '';
        $unverified_email = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu='';
        $category = '';
        $brand = '';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        return view('Admin.customer_send_email', compact('username','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','title','login','sms','unverified_email','banned_customer','send_email','sidebar_menu','sidebar_sub_menu','dashboard','customers','customer_active'));

    }

    public function customer_post_email(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $subject = $request->input('subject');
        $message = $request->input('message');
        $username = $request->input('username');

        $people_data = People::where('username',$username)->first();
        $user_email = $people_data->email;

        $data = array(
                  'subject' => $subject,
                  'message' => $message
        );

        Mail::to($user_email)->send(new CustomerMail($data));
        return redirect('/admin/customer/detail/'.$username)->with('message', 'Email Sent Successfully To The Customer');
    }

   

   

    public function login_history()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Login | History';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = 'active';
        $send_email = '';
        $sidebar_product_menu = '';
        $sidebar_product_sub_menu = '';
        $category = '';
        $brand = '';
        $slider = '';
        $attribute  = '';
        $all_product  = '';
        $product_reviews  = '';
        $sidebar_promotion_menu  = '';
        $sidebar_promotion_sub_menu  = '';
        $cupons  = '';
        $offers = '';
        $subscriber  = '';

        $login_history_data = LoginHistory::all();
        

        
        
        return view('Admin.login_history', ['login_history_data'=>$login_history_data], compact('subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','send_email','title','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function send_email()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

    
        $title = 'Login | History';
        $sidebar_menu = 'side-menu--open';
        $sidebar_sub_menu = 'sidebar-submenu__open';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = 'active';

        $sidebar_product_menu = '';
        $sidebar_product_sub_menu  = '';
        $category = '';
        $brand  = '';
        $slider  = '';
        $attribute  = '';
        $all_product  = '';
        $product_reviews  = '';
        $sidebar_promotion_menu  = '';
        $sidebar_promotion_sub_menu  = '';
        $cupons  = '';
        $offers = '';
        $subscriber  = '';

        return view('Admin.send_email', compact('subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','slider','brand','category','sidebar_product_sub_menu','sidebar_product_menu','title','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function allcustomers_email(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $subject = $request->input('subject');
        $message = $request->input('message');

        $data = array(
            'subject' => $subject,
            'message' => $message
        );

        $people_data = People::all();
        foreach($people_data as $item)
        {
            $email = $item->email;
            Mail::to($email)->send(new AllCustomerEmail($data));
        }

       

       
        return redirect()->back()->with('message', 'Email Sent Successfully To The All Customer');

        
    }

    public function product_category()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Category';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = 'active';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $all_category = Category::orderBy('id', 'desc')->get();
        
        $all_subcategory = Subcategory::all();
        return view('Admin.product_category', ['all_category'=>$all_category,'all_subcategory'=>$all_subcategory], compact('title','slider','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function add_category_show()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Add | Category';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = 'active';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $all_icon = Icon::all();
        return view('Admin.add_product_category', compact('title','slider','all_icon','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }


    public function add_category(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $category_name = $request->input('category_name');
        $meta_title = $request->input('meta_title');
        $meta_description = $request->input('meta_description');
        $meta_keywords = $request->input('meta_keywords');
        $icon = $request->input('icon');

        //$meta_keywords=implode(",",$meta_keywords);

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        

        

       

        

        $category = New Category();
        $category->category_name = $category_name;
        $category->meta_title = $meta_title;
        $category->meta_description = $meta_description;
        $category->meta_keywords = $meta_keywords;
        $category->category_icon = $icon;
        $category->image = $image;
        $category->save();

        return redirect('/admin/product/categories')->with('message', 'New Product Has Been Added Successfully');

    }

    public function edit_category_show($id)
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Edit | Category';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = 'active';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $category_data = Category::find($id);
        $category_name = $category_data->category_name;
        $category_id = $category_data->id;
        $meta_title = $category_data->meta_title;
        $meta_description = $category_data->meta_description;
        $meta_keywords = $category_data->meta_keywords;
        $category_image = $category_data->image;
        $category_icon = $category_data->category_icon;
        $category_image = $category_data->image;
        

        $all_category = Category::all();
        $all_icon = Icon::all();
        return view('Admin.edit_product_category',['all_icon'=>$all_icon,'all_category'=>$all_category], compact('meta_keywords','category_image','slider','category_icon','category_image','meta_description','meta_title','category_id','category_name','title','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function delete_category($id)
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $delete_category = Category::where('id', $id)->delete();
        return redirect('/admin/product/categories')->with('error', 'Category Deleted Successfully');
    }

    public function edit_category(Request $request)
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $category_name = $request->input('category_name');
        $target_category_id = $request->input('target_category_id');
        $meta_description = $request->input('meta_description');
        $meta_keywords = $request->input('meta_keywords');
        $category_icon = $request->input('category_icon');

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        
        




        $category_data = Category::find($target_category_id);

        if($image=='')
        {
            $category_data->category_name = $category_name;
            $category_data->meta_description = $meta_description;
            $category_data->meta_keywords = $meta_keywords;
            $category_data->category_icon = $category_icon;
           // $category_data->image = $image;

        }else{

            $category_data->category_name = $category_name;
            $category_data->meta_description = $meta_description;
            $category_data->meta_keywords = $meta_keywords;
            $category_data->category_icon = $category_icon;
            $category_data->image = $image;


        }
       
        $category_data->save();

        

        

        return redirect('/admin/product/categories')->with('message', 'New Category Edit Successfully');


    }

    public function add_subcategory_show()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Add | SubCategory';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = 'active';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $all_category = Category::all();
        $all_subcategory = Subcategory::orderBy('id','desc')->get();
        $all_icon = Icon::all();
        
        return view('Admin.add_product_subcategory',['all_icon'=>$all_icon,'all_category'=>$all_category, 'all_subcategory'=>$all_subcategory], compact('title','slider','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function add_subcategory(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $category_id = $request->input('category_id');
        $subcategory_name = $request->input('subcategory_name');
        $subcategory_icon = $request->input('subcategory_icon');

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        
        

        $category_data = Category::find($category_id);
        $category_name = $category_data->category_name;
        

        $subcategory = New Subcategory();
        $subcategory->category_id = $category_id;
        $subcategory->subcategory_name = $subcategory_name;
        $subcategory->icon = $subcategory_icon;
        $subcategory->category_name = $category_name;
        $subcategory->image = $image;
        $subcategory->save();
        return redirect('/admin/product/add_subcategory')->with('message', 'New Sub Category Has Been Added Successfully');

    }

    public function edit_subcategory_show($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Add | SubCategory';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = 'active';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = '';

        $subcategory_data = Subcategory::find($id);
        $category_name = $subcategory_data->category_name;
        $subcategory_id = $subcategory_data->id;
        $category_id = $subcategory_data->category_id;
        $subcategory_name = $subcategory_data->subcategory_name;
        $image = $subcategory_data->image;
        $subcategory_icon = $subcategory_data->icon;
        $subcategory_image = $subcategory_data->image;

        $all_category = Category::all();
        $all_subcategory = Subcategory::orderBy('id','desc')->get();
        $all_icon = Icon::all();
        
        return view('Admin.edit_product_subcategory',['all_icon'=>$all_icon,'all_category'=>$all_category, 'all_subcategory'=>$all_subcategory], compact('category_id','subcategory_image','slider','subcategory_icon','subcategory_id','image','subcategory_name','category_name','title','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function edit_subcategory(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $category_id = $request->input('category_id');
        $subcategory_name = $request->input('subcategory_name');
        $subcategory_id = $request->input('subcategory_id');
        $subcategory_icon = $request->input('icon');

        $category_data = Category::where('id',$category_id)->get();
        foreach($category_data as $item)
        {
            $category_name = $item->category_name;
            
        }

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }



        $subcategory_data = Subcategory::find($subcategory_id);

        if($image=='')
        {

            $subcategory_data->category_id = $category_id;
            $subcategory_data->subcategory_name = $subcategory_name;
            $subcategory_data->category_name = $category_name;
            $subcategory_data->icon = $subcategory_icon;
            //$subcategory_data->image = $image;

        }else{

            $subcategory_data->category_id = $category_id;
            $subcategory_data->subcategory_name = $subcategory_name;
            $subcategory_data->category_name = $category_name;
            $subcategory_data->icon = $subcategory_icon;
            $subcategory_data->image = $image;


        }
       
        $subcategory_data->save();
        

       
        return redirect('/admin/product/add_subcategory')->with('message', 'New Subcategory Edit Successfully');

        

    }

    public function delete_subcategory($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $delete_data = Subcategory::where('id', $id)->delete();
        return redirect('/admin/product/add_subcategory')->with('error','Subcategory Item Deleted Successfully');
    }

    public function subcategory_slider($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $subcategory_data = Subcategory::find($id);
        if($subcategory_data->slider=='Yes')
        {
            $subcategory_data->slider = 'No';
            $subcategory_data->save();
        }else{
            $subcategory_data->slider = 'Yes';
            $subcategory_data->save();
        }

        return redirect('/admin/product/add_subcategory')->with('message', 'SubCategory Slider Updated Successfully');
    }

    public function product_brand()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Brands';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = 'active';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $all_brand = Brand::all();
        return view('Admin.product_brand',['all_brand'=> $all_brand], compact('title','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','slider','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function add_brand_show()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);


        $title = 'Add | Product | Brands';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = 'active';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        return view('Admin.add_brand', compact('title','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','slider','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
        
    }

    public function add_brand(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $brand_name = $request->input('brand_name');
        $date = $request->input('date');
        

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        

        $brand_data = New Brand();
        $brand_data->brand_name = $brand_name;
        $brand_data->date = $date;
        $brand_data->image = $image;
        $brand_data->save();
        
        return redirect('/admin/product/brands')->with('message', 'New Brand Added Successfully');
    }

    public function edit_brand_show($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);


        $title = 'Edit | Product | Brands';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = 'active';
        $slider = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $brand = Brand::find($id);
        $brand_name = $brand->brand_name;
        $brand_image = $brand->image;
        $brand_id = $brand->id;

        return view('Admin.edit_brand', compact('title','brand_id','brand_image','brand_name','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','slider','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
        
    }

    public function edit_brand(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $brand_name = $request->input('brand_name');
        $brand_id = $request->input('brand_id');

        
        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        if($image=='')
        {

            $brand_data = Brand::find($brand_id);
            $brand_data->brand_name = $brand_name;
           // $brand_data->image = $image;
            $brand_data->save();

        }else{

            $brand_data = Brand::find($brand_id);
            $brand_data->brand_name = $brand_name;
            $brand_data->image = $image;
            $brand_data->save();

        }

       
        return redirect('/admin/product/brands')->with('message', 'New Brand Added Successfully');




    }

    public function top_brand($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $brand_data = Brand::find($id);

        if($brand_data->top=='Yes')
        {
            $brand_data->top = 'No';
            $brand_data->save();

        }else{
            $brand_data->top = 'Yes';
            $brand_data->save();
        }

        return redirect('/admin/product/brands')->with('message', 'Brand Top Status Updated Successfully');
    }

    public function delete_brand($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $delete_brand = Brand::where('id', $id)->delete();
        return redirect('/admin/product/brands')->with('error', 'Brand One Item Deleted Successfully');
    }

    public function product_slider()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Slider';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = 'active';

        $all_icon = Icon::all();
        $all_slider = Slider::all();
        return view('Admin.slider',['all_slider'=>$all_slider], compact('title','slider','all_icon','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function add_slider(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $slider_title = $request->input('slider_title');

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        

        $slider = New Slider();
        $slider->slider_title = $slider_title;
        $slider->image = $image;
        $slider->save();
        return redirect('/admin/product/slider')->with('message', 'New Slider Added Successfully');

    }

    public function edit_slider_show($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);


        $title = 'Edit | Product | Slider';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';
        $slider = 'active';

        $slider_data = Slider::find($id);
        $slider_title = $slider_data->slider_title;
        $slider_image = $slider_data->image;
        $slider_id = $slider_data->id;

        
        $all_slider = Slider::all();
        return view('Admin.edit_slider',['all_slider'=>$all_slider], compact('title','slider_id','slider_image','slider_title','slider','subscriber','offers','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
        
    }



    public function edit_slider(Request $request)
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);

        $slider_title = $request->input('slider_title');
        $slider_id = $request->input('slider_id');

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $slider = Slider::find($slider_id);

        if($image == '')
        {

            $slider->slider_title = $slider_title;
            //$slider->image = $image;
            $slider->save();


        }else{

            $slider->slider_title = $slider_title;
            $slider->image = $image;
            $slider->save();

        }
       
        return redirect('/admin/product/slider')->with('message','Slider Updated Successfully');

    }

    public function delete_slider($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $delete_slider = Slider::where('id', $id)->delete();
        return redirect('/admin/product/slider')->with('error', 'Slider Has Been Deleted Successfully');
    }

    public function slider_status($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $slider_data = Slider::find($id);

        if($slider_data->status=='Active')
        {
            $slider_data->status = 'DeActive';
            $slider_data->save();
           
        }else{
            $slider_data->status = 'Active';
            $slider_data->save();

        }

        return redirect('/admin/product/slider')->with('message', 'Slider Status Updated Successfully');
    }

    public function product_attribute()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Attribute';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = 'active';
        $all_product = '';
        return view('Admin.product_attribute', compact('title','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function all_product()
    {
        $lang  = session()->get('lang');
        App::setLocale($lang);


        $title = 'All | Product';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = 'active';
        $slider = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $all_product = Product::all();
        return view('Admin.all_product',['all_product'=>$all_product], compact('title','offers','subscriber','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','slider','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function add_product_show()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Add | Product';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = 'active';
        $slider = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $all_category = Category::all();
        $all_brand = Brand::all();
        return view('Admin.add_product',['all_category'=>$all_category, 'all_brand'=>$all_brand], compact('title','offers','subscriber','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','slider','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function add_product(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $product_title = $request->input('product_title');
        $category_id = $request->input('product_category');

        $category_data = Category::where('id', $category_id)->get();
        foreach($category_data as $item)
        {
            $product_category = $item->category_name;
        }


        $product_subcategory = $request->input('product_subcategory');

        $subcategory_data = Subcategory::where('id',$product_subcategory)->first();
        $subcategory_name = $subcategory_data->subcategory_name;
        

        
       
        $regular_price = $request->input('regular_price');
        $discount_price = $request->input('discount_price');
        $stock_quantity = $request->input('stock_quantity');
        $product_brand = $request->input('product_brand');

        $product_specification = $request->input('specification');
        $product_title1 = $request->input('title1');
        $product_title2 = $request->input('title2');
        $product_title3 = $request->input('title3');
        $product_title4 = $request->input('title4');
        $product_title5 = $request->input('title5');
        $product_title6 = $request->input('title6');
        $product_title7 = $request->input('title7');
        $product_title8 = $request->input('title8');
        $product_title9 = $request->input('title9');
        $product_title10 = $request->input('title10');

        $product_description1 = $request->input('description1');
        $product_description2 = $request->input('description2');
        $product_description3 = $request->input('description3');
        $product_description4 = $request->input('description4');
        $product_description5 = $request->input('description5');
        $product_description6 = $request->input('description6');
        $product_description7 = $request->input('description7');
        $product_description8 = $request->input('description8');
        $product_description9 = $request->input('description9');
        $product_description10 = $request->input('description10');

        $video_url = $request->input('video_url');
        parse_str( parse_url( $video_url, PHP_URL_QUERY ), $video_id );
       // $video_id = $video_url.split("?v=")[1];
        $video_id =  $video_id['v'];
        










        $brand_data = Brand::where('brand_name', $product_brand)->get();
        foreach($brand_data as $item)
        {
            $brand_id = $item->id;
        }

        $product_description = $request->input('product_description');
        $meta_keywords = $request->input('meta_keywords');
        $product_season = $request->input('product_season');

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image1 = $_FILES['image1']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image2 = $_FILES['image2']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image3 = $_FILES['image3']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image3']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

       
       

        $product_data = New Product();
        $product_data->product_title = $product_title;
        $product_data->category_id = $category_id;
        $product_data->product_category = $product_category;
        $product_data->product_subcategory = $product_subcategory;
        $product_data->regular_price = $regular_price;
        $product_data->discount_price = $discount_price;
        $product_data->stock_quantity = $stock_quantity;
        $product_data->product_brand = $product_brand;
        $product_data->brand_id = $brand_id;
        $product_data->product_description = $product_description;
        $product_data->meta_keywords = $meta_keywords;
        $product_data->image = $image;
        $product_data->image1 = $image1;
        $product_data->image2 = $image2;
        $product_data->image3 = $image3;
        $product_data->product_season = $product_season;

        $product_data->specification = $product_specification;
        $product_data->title1 = $product_title1;
        $product_data->title2 = $product_title2;
        $product_data->title3 = $product_title3;
        $product_data->title4 = $product_title4;
        $product_data->title5 = $product_title5;
        $product_data->title6 = $product_title6;
        $product_data->title7 = $product_title7;
        $product_data->title8 = $product_title8;
        $product_data->title9 = $product_title9;
        $product_data->title10 = $product_title10;

        $product_data->description1 = $product_description1;
        $product_data->description2 = $product_description2;
        $product_data->description3 = $product_description3;
        $product_data->description4 = $product_description4;
        $product_data->description5 = $product_description5;
        $product_data->description6 = $product_description6;
        $product_data->description7 = $product_description7;
        $product_data->description8 = $product_description8;
        $product_data->description9 = $product_description9;
        $product_data->description10 = $product_description10;

        $product_data->video_url = $video_url;
        $product_data->video_id = $video_id;
        $product_data->subcategory_name = $subcategory_name;
        
        $product_data->save();

        return redirect('/admin/product/all_product')->with('message', 'New Product Added Successfully');

        
    }

    public function product_edit_show($id)
    {
         $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Edit | Product';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = 'active';
        $slider = '';
        $product_reviews = '';
        $sidebar_promotion_menu = '';
        $sidebar_promotion_sub_menu = '';
        $cupons = '';
        $offers = '';
        $subscriber = '';

        $all_category = Category::all();
        $all_brand = Brand::all();

        $current_product_id = $id;

        $product_data = Product::find($id);
        $product_title = $product_data->product_title;
        $product_category = $product_data->product_category;
        
        $regular_price = $product_data->regular_price;
        $discount_price = $product_data->discount_price;
        $stock_quantity = $product_data->stock_quantity;
        $product_brand = $product_data->product_brand;
        $product_season = $product_data->product_season;
        $product_description = $product_data->product_description;
        $meta_keywords = $product_data->meta_keywords;
        $image = $product_data->image;
        $image1 = $product_data->image1;
        $image2 = $product_data->image2;
        $image3 = $product_data->image3;

        $video_url = $product_data->video_url;
        $product_title1 = $product_data->title1;
        $product_title2 = $product_data->title2;
        $product_title3 = $product_data->title3;
        $product_title4 = $product_data->title4;
        $product_title5 = $product_data->title5;
        $product_title6 = $product_data->title6;
        $product_title7 = $product_data->title7;
        $product_title8 = $product_data->title8;
        $product_title9 = $product_data->title9;
        $product_title10 = $product_data->title10;

        $product_description1 = $product_data->description1;
        $product_description2 = $product_data->description2;
        $product_description3 = $product_data->description3;
        $product_description4 = $product_data->description4;
        $product_description5 = $product_data->description5;
        $product_description6 = $product_data->description6;
        $product_description7 = $product_data->description7;
        $product_description8 = $product_data->description8;
        $product_description9 = $product_data->description9;
        $product_description10 = $product_data->description10;

        
        
        $category_data = Category::where('category_name', $product_category)->get();
        
        foreach($category_data as $item)
        {
            $category_id = $item->id;

        }
        $product_subcategory_id = $product_data->product_subcategory;

        if($product_subcategory_id !='')
        {

            $subcategory_data = Subcategory::where('id', $product_subcategory_id)->get();

            foreach($subcategory_data as $item)
            {
                $subcategory_name = $item->subcategory_name;
    
               
            }

        }else{
            $subcategory_name = 'None';
        }
        

       

       

        

        $subcategory_id = $id;


    
        
        return view('Admin.edit_product',['all_category'=>$all_category, 'all_brand'=>$all_brand], compact('video_url','product_title1', 'product_title2', 'product_title3', 'product_title4', 'product_title5', 'product_title6', 'product_title7', 'product_title8', 'product_title9', 'product_title10', 'product_description1', 'product_description2', 'product_description3', 'product_description4', 'product_description5', 'product_description6', 'product_description7', 'product_description8', 'product_description9', 'product_description10', 'meta_keywords','subcategory_name','current_product_id','image1','image2','image3','image','product_description','product_title','product_brand','product_season','stock_quantity','discount_price','regular_price','subcategory_id','category_id','product_category','title','offers','subscriber','cupons','sidebar_promotion_sub_menu','sidebar_promotion_menu','product_reviews','slider','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));
    }

    public function edit_product(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);


        $product_title = $request->input('product_title');
        $category_id = $request->input('product_category');

        $category_data = Category::where('id', $category_id)->get();
        foreach($category_data as $item)
        {
            $product_category = $item->category_name;
        }

        


        $product_subcategory = $request->input('product_subcategory');

        

       
        
        $regular_price = $request->input('regular_price');
        $discount_price = $request->input('discount_price');
        $stock_quantity = $request->input('stock_quantity');
        $product_brand = $request->input('product_brand');

        $brand_data = Brand::where('brand_name', $product_brand)->get();
        foreach($brand_data as $item)
        {
            $brand_id = $item->id;
        }
        $product_description = $request->input('product_description');
        $meta_keywords = $request->input('meta_keywords');
        $product_season = $request->input('product_season');

        $current_id = $request->input('current_id');

        $product_specification = $request->input('specification');


        $product_title1 = $request->input('title1');
        $product_title2 = $request->input('title2');
        $product_title3 = $request->input('title3');
        $product_title4 = $request->input('title4');
        $product_title5 = $request->input('title5');
        $product_title6 = $request->input('title6');
        $product_title7 = $request->input('title7');
        $product_title8 = $request->input('title8');
        $product_title9 = $request->input('title9');
        $product_title10 = $request->input('title10');

        $product_description1 = $request->input('description1');
        $product_description2 = $request->input('description2');
        $product_description3 = $request->input('description3');
        $product_description4 = $request->input('description4');
        $product_description5 = $request->input('description5');
        $product_description6 = $request->input('description6');
        $product_description7 = $request->input('description7');
        $product_description8 = $request->input('description8');
        $product_description9 = $request->input('description9');
        $product_description10 = $request->input('description10');

        $video_url = $request->input('video_url');

       
       
        

        
        

        $msg = "";
        $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image1 = $_FILES['image1']['name'];
        $target = "images/" . basename($image1);

        if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image2 = $_FILES['image2']['name'];
        $target = "images/" . basename($image2);

        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        $msg = "";
        $image3 = $_FILES['image3']['name'];
        $target = "images/" . basename($image3);

        if (move_uploaded_file($_FILES['image3']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }

        if($product_subcategory !='')
        {
            $product_data = Product::find($current_id);
            $product_data->product_subcategory = $product_subcategory;
           
           
            $product_data->save();

        }

        if($image !='')
        {
            $product_data = Product::find($current_id);
           
            $product_data->image = $image;
           
            $product_data->save();
    

        }else if($image1 !=''){
            $product_data = Product::find($current_id);
            $product_data->image1 = $image1;
           
            $product_data->save();
    
        }elseif($image2 !=''){
            $product_data = Product::find($current_id);
           
           
            $product_data->image2 = $image2;
           
            $product_data->save();
    
        }elseif($image3 !=''){
            $product_data = Product::find($current_id);
            
            $product_data->image3 = $image3;
            
            $product_data->save();
    
        }else{
            $product_data = Product::find($current_id);
            $product_data->product_title = $product_title;
            $product_data->product_category = $product_category;
            $product_data->category_id = $category_id;
            
            $product_data->regular_price = $regular_price;
            $product_data->discount_price = $discount_price;
            $product_data->stock_quantity = $stock_quantity;
            $product_data->product_brand = $product_brand;
            $product_data->brand_id = $brand_id;
            $product_data->product_description = $product_description;
            $product_data->meta_keywords = $meta_keywords;
           
            $product_data->product_season = $product_season;

            
            $product_data->title1 = $product_title1;
            $product_data->title2 = $product_title2;
            $product_data->title3 = $product_title3;
            $product_data->title4 = $product_title4;
            $product_data->title5 = $product_title5;
            $product_data->title6 = $product_title6;
            $product_data->title7 = $product_title7;
            $product_data->title8 = $product_title8;
            $product_data->title9 = $product_title9;
            $product_data->title10 = $product_title10;
    
            $product_data->description1 = $product_description1;
            $product_data->description2 = $product_description2;
            $product_data->description3 = $product_description3;
            $product_data->description4 = $product_description4;
            $product_data->description5 = $product_description5;
            $product_data->description6 = $product_description6;
            $product_data->description7 = $product_description7;
            $product_data->description8 = $product_description8;
            $product_data->description9 = $product_description9;
            $product_data->description10 = $product_description10;
            $product_data->specification = $product_specification;

            if($video_url !="")
            {
                parse_str( parse_url( $video_url, PHP_URL_QUERY ), $video_id );
                // $video_id = $video_url.split("?v=")[1];
                 $video_id =  $video_id['v'];
    
                $product_data->video_url = $video_url;
                $product_data->video_id = $video_id;
    
            }
    
            

           
            $product_data->save();

            $current_product = Product::where('id',$current_id)->first();
            $subcategory_id = $current_product->product_subcategory;
            
            $subcategory_data = Subcategory::where('id',$subcategory_id)->first();
            $subcategory_name = $subcategory_data->subcategory_name;
            
            $product_data->subcategory_name = $subcategory_name;
            $product_data->save();

           
    
        }

        return redirect('/admin/product/all_product')->with('message', 'Product Edited Successfully');

       
        

    }

    public function delete_product($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $delete_product = Product::where('id', $id)->delete();
        return redirect('/admin/product/all_product')->with('error', 'Product Has Been Deleted Successfully');
    }

    public function product_speciality($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $product_data = Product::find($id);
        if($product_data->speciality=='Yes')
        {
            $product_data->speciality = 'No';
            $product_data->save();
        }else{
            $product_data->speciality = 'Yes';
            $product_data->save();
        }
        return redirect('/admin/product/all_product')->with('message', 'Product Speciality Has Been Updated Successfully');
    }

    public function featured_product($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $product_data = Product::find($id);
        if($product_data->featured=='Yes')
        {
            $product_data->featured = 'No';
            $product_data->save();

        }else{
            $product_data->featured = 'Yes';
            $product_data->save();
        }
        return redirect('/admin/product/all_product')->with('message', 'Product Featured Updated Successfully');
    }

    public function discount_product($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $product_data = Product::find($id);
        if($product_data->discount_option=='Yes')
        {
            $product_data->discount_option='No';
            $product_data->save();
        }else{
            $product_data->discount_option='Yes';
            $product_data->save();
        }
        return redirect('/admin/product/all_product')->with('message','Discount Product Updated Successfully');
    }

    public function product_advertise($id)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $product_data = Product::find($id);
        if($product_data->advertise_option=='Yes')
        {
            $product_data->advertise_option='No';
            $product_data->save();
        }else{
            $product_data->advertise_option='Yes';
            $product_data->save();
        }

        return redirect('/admin/product/all_product')->with('message', 'Product Advertise Option Updated Successfully');
    }

    public function admin_ajax_product_category(Request $request)
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $id = $request->input('id');
        $get_subcategory = Subcategory::where('category_id', $id)->get();
        $cap = array('get_subcategory' => $get_subcategory);
        $output = '<option selected="selected" disabled="disabled">Select subcategory</option>';
        foreach ($get_subcategory as $key) {
            $output .= '<option value=" ' . $key->id . ' ">' . $key->subcategory_name . '</option>';
        }

        echo json_encode($output);

    }

    public function product_reviews()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        $title = 'Product | Reviews';
        $sidebar_menu = '';
        $sidebar_sub_menu = '';
        $customers='';
        $dashboard = '';
        $customer_active='';
        $banned_customer = '';
        $unverified_email = '';
        $sms = '';
        $login = '';
        $send_email = '';
        $sidebar_product_menu = 'side-menu--open';
        $sidebar_product_sub_menu = 'sidebar-submenu__open';
        $category = '';
        $brand = '';
        $attribute = '';
        $all_product = '';
        $product_reviews = 'active';
        $slider ='';

        $all_reviews = Review::all();
        $all_product = Product::all();
        return view('Admin.product_reviews', ['all_product'=>$all_product,'all_reviews'=>$all_reviews], compact('slider','title','product_reviews','all_product','attribute','brand','sidebar_product_menu','sidebar_product_sub_menu','category','send_email','login','sms','unverified_email','customer_active', 'banned_customer','sidebar_menu','customers','sidebar_sub_menu','dashboard'));

    }

    public function admin_all_payment()
    {

        $lang  = session()->get('lang');
        App::setLocale($lang);

        return view('Admin.all_payment');
    }



   

  

}
