<!DOCTYPE html>
<html lang="en">

<head>
    <title>Viser - Checkout</title>
    @include('Frontend.link')
</head>

<body>
    <div class="overlay"></div>
    <a href="javascript:void(0)" class="scrollToTop"><i class="las la-angle-up"></i></a>
    <!-- ===========Loader=========== -->
    <div class="preloader">
        <div class="logo">
        </div>
        <div class="loader-frame">
            <div class="loader1" id="loader1">
            </div>
            <div class="circle"></div>
            <span class="hello"><i class="las la-shopping-bag"></i></span>
            <h6 class="wellcome"><span>ViserMart</span></h6>
        </div>
    </div>
    <!-- ===========Loader=========== -->
    <!-- Header Section Starts Here -->
    <header>
        @include('Frontend.header')
    </header>

    <div class="mobile-menu d-lg-none">
        <div class="mobile-menu-header">
            <div class="mobile-menu-close">
                <i class="las la-times"></i>
            </div>
            <div class="logo">
                <a href="./index.html">
                    <img src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo_2.png" alt="logo">
                </a>
            </div>
            <div class="language_setting">
                <div class="active_lang cl-white">


                    <div class="img">
                        <img src="https://script.viserlab.com/visermart/assets/images/lang/5ffe84073745e1610515463.png" alt="image">
                    </div>
                    <span class="text-capitalize">English</span>
                    <i class="las la-caret-down"></i>
                </div>
                <ul class="language_setting_list">

                    <li>
                        <a href="https://script.viserlab.com/visermart/change/bn">
                            <div class="img">
                                <img src="https://script.viserlab.com/visermart/assets/images/lang/5ffe83f108a3d1610515441.png" alt="country">
                            </div>
                            <span class="text-capitalize">Bangla</span>
                        </a>
                    </li>


                    <li>
                        <a href="https://script.viserlab.com/visermart/change/es">
                            <div class="img">
                                <img src="https://script.viserlab.com/visermart/assets/images/lang/606859990183b1617451417.png" alt="country">
                            </div>
                            <span class="text-capitalize">Spanish</span>
                        </a>
                    </li>


                    <li>
                        <a href="https://script.viserlab.com/visermart/change/fr-fr">
                            <div class="img">
                                <img src="https://script.viserlab.com/visermart/placeholder/image/64x64" alt="country">
                            </div>
                            <span class="text-capitalize">france</span>
                        </a>
                    </li>


                    <li>
                        <a href="https://script.viserlab.com/visermart/change/de">
                            <div class="img">
                                <img src="https://script.viserlab.com/visermart/assets/images/lang/60709ff7b13b91617993719.png" alt="country">
                            </div>
                            <span class="text-capitalize">german</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <ul class="nav-tabs nav border-0">
            <li>
                <a href="#menu" class="active" data-toggle="tab">Menu</a>
            </li>
            <li>
                <a href="#cate" data-toggle="tab">Category</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="menu">
                <div class="mobile-menu-body">
                    <ul class="menu mt-4">
                        <li>
                            <a href="https://script.viserlab.com/visermart">Home</a>
                        </li>

                        <li>
                            <a href="https://script.viserlab.com/visermart/products">Products</a>
                        </li>

                        <li>
                            <a href="https://script.viserlab.com/visermart/brands">Brands</a>
                        </li>
                        <li>
                            <a href="https://script.viserlab.com/visermart/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="quick-links mt-4">
                    <ul>
                        <li><a href="https://script.viserlab.com/visermart/36/returns-and-exchanges">Returns and Exchanges</a></li>
                        <li><a href="https://script.viserlab.com/visermart/37/shipping-and-delivery">Shipping and Delivery</a></li>
                        <li><a href="https://script.viserlab.com/visermart/38/terms-and-conditions">Terms and Conditions</a></li>
                        <li><a href="https://script.viserlab.com/visermart/39/privacy-and-policies">Privacy and Policies</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="cate">
                <div class="left-category single-style">
                    <ul class="categories">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-male"></i> Men&#039;s Fashion
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                            <ul class="sub-category">
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/2/clothing">
                                        <i class="las la-tshirt"></i> Clothing
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/6/glasses">
                                        <i class="las la-glasses"></i> Glasses
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/5/shoes">
                                        <i class="las la-shoe-prints"></i> Shoes
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/7/watch">
                                        <i class="lar la-clock"></i> Watch
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-female"></i> Women&#039;s Fashion
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                            <ul class="sub-category">
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/11/beauty-skin">
                                        <i class="fas fa-hockey-puck"></i> Beauty &amp; Skin
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/4/clothing">
                                        <i class="las la-female"></i> Clothing
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/8/glasses">
                                        <i class="las la-glasses"></i> Glasses
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/10/jewelry">
                                        <i class="lar la-life-ring"></i> Jewelry
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/9/shoes">
                                        <i class="fas fa-shoe-prints"></i> Shoes
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-dumbbell"></i> Electronics
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                            <ul class="sub-category">
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/15/computer-accessories">
                                        <i class="fas fa-keyboard"></i> Computer Accessories
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/36/drones">
                                        <i class="lar la-snowflake"></i> Drones
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/17/headphones">
                                        <i class="las la-headphones"></i> Headphones
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/14/laptops">
                                        <i class="las la-laptop"></i> Laptops
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/13/mobiles">
                                        <i class="fas fa-mobile"></i> Mobiles
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/16/television">
                                        <i class="las la-tv"></i> Television
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-home"></i> Home Appliances
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                            <ul class="sub-category">
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/20/bedclothes">
                                        <i class="fas fa-bed"></i> Bedclothes
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/19/furniture">
                                        <i class="las la-chart-bar"></i> Furniture
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="https://script.viserlab.com/visermart/category/21/kitchen-accessories">
                                        <i class="las la-utensil-spoon"></i> kitchen Accessories
                                    </a>

                                    <div class="cate-icon">
                                        <i class="las la-angle-down"></i>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-car-side"></i> Automobile &amp; Motorcycle
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-baseball-ball"></i> Sports &amp; Outdoors
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-child"></i> Baby&#039;s Fashion
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fas fa-bowling-ball"></i> Kids &amp; Toys
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="lab la-pied-piper-hat"></i> Health &amp; Beauty
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="lab la-mandalorian"></i> Skin &amp; Hair Solution
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-gift"></i> Gift Items
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fas fa-theater-masks"></i> COVID 19 Protections
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fas fa-box-open"></i> Gift Corner
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="far fa-heart"></i> Weddings &amp; Events
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="las la-clone"></i> Novelty &amp; Special Use
                            </a>
                            <div class="cate-icon">
                                <i class="las la-angle-down"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ===========Cart=========== -->
    @include('Frontend.cart')
    <!-- ===========Cart End=========== -->

    <!-- ===========Wishlist=========== -->
    @include('Frontend.wishlist')
    <!-- ===========Wishlist End=========== -->

    <!-- Header Section Ends Here -->
    @include('Frontend.dashboard_right_menu')


    <div class="hero-section section-bg py-4">
        <div class="container">
            <ul class="breadcrumb">

                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/product/all_cart">Cart</a></li>

                <li>Checkout</li>

            </ul>
        </div>
    </div>
    <!-- Checkout Section Starts Here -->

    <div class="checkout-section padding-bottom padding-top">
        <div class="container">
            <div class="checkout-area section-bg">
                <div class="row flex-wrap-reverse">
                    <div class="col-md-6 col-lg-7 col-xl-8">
                        <div class="checkout-wrapper">
                            <h4 class="title text-center">Shipping Address</h4>
                            <ul class="nav-tabs nav justify-content-center">
                                <li>
                                    <a href="#self" data-toggle="tab" class="active">For Yourself</a>
                                </li>
                                <li>
                                    <a href="#guest" data-toggle="tab">Order As Gift</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show fade active" id="self">

                                    <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="firstName">Full name</label>
                                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="" value="{{$user_name}}" required>
                                                <div class="invalid-feedback">
                                                    Valid customer name is required.
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name='total_amount' value="{{$sum}}">

                                        <div class="mb-3">
                                            <label for="mobile">Mobile</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile" value="{{$mobile}}" required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Your Mobile number is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                            <input type="email" name="customer_email" class="form-control" id="email" placeholder="you@example.com" value="{{$email}}" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid email address for shipping updates.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="" required>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Country</label>
                                                <select class="custom-select d-block w-100" id="country" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid country.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="state">State</label>
                                                <select class="custom-select d-block w-100" name="state" id="state" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Jheneidah">Jeneidah</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="zip">Zip</label>
                                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Zip code required.
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="same-address">
                                            <input type="hidden" value="1200" name="amount" id="total_amount" required />
                                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                                                address</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-info">
                                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                        </div>

                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout (Hosted)</button>







                                    </form>
                                </div>
                                <div class="tab-pane fade" id="guest">

                                    <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="firstName">Full name</label>
                                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Your Name" required>
                                                <div class="invalid-feedback">
                                                    Valid customer name is required.
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name='total_amount' value="{{$sum}}">

                                        <div class="mb-3">
                                            <label for="mobile">Mobile</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"  required>
                                                <div class="invalid-feedback" style="width: 100%;">
                                                    Your Mobile number is required.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                            <input type="email" name="customer_email" class="form-control" id="email" placeholder="you@example.com"  required>
                                            <div class="invalid-feedback">
                                                Please enter a valid email address for shipping updates.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="" required>
                                            <div class="invalid-feedback">
                                                Please enter your shipping address.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Country</label>
                                                <select class="custom-select d-block w-100" id="country" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid country.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="state">State</label>
                                                <select class="custom-select d-block w-100" name="state" id="state" required>
                                                    <option value="">Choose...</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Jheneidah">Jeneidah</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="zip">Zip</label>
                                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Zip code required.
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="same-address">
                                            <input type="hidden" value="1200" name="amount" id="total_amount" required />
                                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                                                address</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-info">
                                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                        </div>

                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout (Hosted)</button>







                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 col-xl-4 regular">

                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                            <span class="badge badge-secondary badge-pill">{{$cart_count}}</span>
                        </h4>
                        <ul class="list-group mb-3">

                            @foreach($all_cart as $item)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">{{$item->product_title}}</h6>

                                    <br>
                                    <img src="{{asset('images/'.$item->product_image)}}" class="img-thumbnail" width="70px" height="70px">

                                </div>
                                <span class="text-muted">{{$item->total_price}}</span>

                            </li>
                            @endforeach

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (BDT)</span>
                                <strong>{{$sum}} TK</strong>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-6 col-lg-5 col-xl-4" id="shipping">

                    </div>




                </div>
            </div>
        </div>
    </div>

    <!-- Checkout Section Ends Here -->

    <!-- Footer Section Starts Here -->
    <footer class="bg-3">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-widget widget-about">
                    <div class="logo">
                        <a href="https://script.viserlab.com/visermart">
                            <img class="w-100 h-auto" src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo_2.png" alt="logo">
                        </a>
                    </div>
                    <p>Visermart brings you tons of products in over 20+ different categories, including men's fashion, women's fashion, baby fashion, and more.</p>

                </div>
                <div class="footer-widget widget-link">
                    <h5 class="title cl-white">Pages</h5>
                    <ul>
                        <li><a href="https://script.viserlab.com/visermart/36/returns-and-exchanges">Returns and Exchanges</a></li>
                        <li><a href="https://script.viserlab.com/visermart/37/shipping-and-delivery">Shipping and Delivery</a></li>
                        <li><a href="https://script.viserlab.com/visermart/38/terms-and-conditions">Terms and Conditions</a></li>
                        <li><a href="https://script.viserlab.com/visermart/39/privacy-and-policies">Privacy and Policies</a></li>
                    </ul>
                </div>
                <div class="footer-widget widget-link">
                    <h5 class="title cl-white">Useful link</h5>
                    <ul>
                        <li><a href="https://script.viserlab.com/visermart/about">About Us</a></li>
                        <li><a href="https://script.viserlab.com/visermart/contact">Contact Us</a></li>
                        <li><a href="https://script.viserlab.com/visermart/faqs">FAQ</a></li>
                        <li><a href="https://script.viserlab.com/visermart/track_order">Track Your Order</a></li>
                    </ul>
                </div>

                <div class="footer-widget widget-link widget-contact">
                    <h5 class="title cl-white">Contact Us</h5>
                    <ul>
                        <li>
                            <i class="las la-map-marker"></i>
                            Visermart, House 60, Road #5555
                        </li>
                        <li>
                            <a href="Tel:+ (001) 001 001"><i class="las la-phone"></i>+ (001) 001 001</a>
                        </li>
                        <li>
                            <a href="/cdn-cgi/l/email-protection#dbafbea8af9ba8b2afbef5b8b4b6"><i class="las la-envelope"></i><span class="__cf_email__" data-cfemail="9ce8f9efe8dceff5e8f9b2fff3f1">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="footer-copyright">
                <div class="copyright-area d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <p>Copyright © visermart 2021. All rights reserved.</p>
                    </div>
                    <ul class="social-icons">

                        <li>
                            <a href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin-in"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com">
                                <i class="fab fa-instagram"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com">
                                <i class="fab fa-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f"></i> </a>
                        </li>
                    </ul>
                    <div class="right">
                        <img src="https://script.viserlab.com/visermart/assets/images/frontend/footer/5fe717202e4f91608980256.png" alt="footer">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends Here -->

    <div class="modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="ajax-loader-wrapper d-flex align-items-center justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('Frontend.script')

    <!---Ajax Script--->


    <script>
        $(document).ready(function() {
            $('#shipping_method').change(function() {

                var shipping_value = $(this).val();
                var token = $('input[name="_token"]').val();
                console.log(shipping_value);

                // console.log(token)

                $.ajax({

                    url: '/ajax/shipping_method',
                    method: 'post',

                    data: {
                        shipping_value: shipping_value,
                        _token: token
                    },
                    success: function(result) {
                        $('.regular').hide();
                        $('#shipping').html(result);

                    }
                })

            })
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>