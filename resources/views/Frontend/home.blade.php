<!DOCTYPE html>
<html lang="en">

<head>
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

    @include('Frontend.right_menu_login')

   
    

    <div class="main-sections oh">


        <div class="left-category home-category active d-none d-xl-block">

            <ul class="categories">


                @foreach($all_category as $item)


                <li>
                    <a href="/product/category/{{$item->category_name}}">
                        <i class="{{$item->category_icon}}"></i> {{$item->category_name}}
                    </a>




                    <ul class="sub-category">
                        @foreach($all_subcategory as $data)
                        @if($item->id == $data->category_id)
                        <li>

                            <a href="/product/subcategory/{{$data->subcategory_name}}">
                                <i class="{{$data->icon}}"></i> {{$data->subcategory_name}}
                            </a>

                        </li>
                        @endif
                        @endforeach
                    </ul>





                </li>


                @endforeach

            </ul>
        </div>


        <!---slider section--->

        @include('Frontend.slider')

        <!--End slider Section-->



        <!---start Right Category-->

        <div class="right-category">
            <h6 class="section-title d-xl-none">
                Special Products <span class="close-category">
                    <i class="las la-times"></i>
                </span>
            </h6>
            <div class="todays-deal">

                @foreach($all_product as $item)

                @if($item->speciality=='Yes')
                <a href="/product/details/{{$item->product_title}}" class="item">
                    <div class="thumb">
                        <img src="{{asset('images/'.$item->image)}}" alt="special">
                    </div>
                    <div class="cont">
                        <span class="title" title="Puma Pink ladies dresses">{{$item->product_title}}</span>
                        <span class="price">
                            TK.{{$item->regular_price}}
                            <del>45.30</del>
                        </span>
                    </div>
                </a>
                @endif

                @endforeach





            </div>
        </div>

        <!--End Right Category-->
    </div>


    <!-- Newsletter Section Starts Here -->
    <div class="newsletter-section bg-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="newsletter-header">
                        <h3 class="title">Subscribe to our newsletter to get the latest news, updates, and special offers</h3>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="subscribe-form">
                        <input type="email" placeholder="Your Email Address..." name="email">
                        <button type="button" class="subscribe-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Section Ends Here -->

    <!-- Flash Section Starts Here -->
    @include('Frontend.flash')

    <!-- Flash Section Ends Here -->

    <!-- Discount Product Starts Here -->
    @include('Frontend.discount')
    <!-- End Discount Product Section Ends Here -->

    <!-- Featured Section Starts Here -->
    @include('Frontend.featured')
    <!-- Featured Section Ends Here -->

    <!-- Section Fashion Starts Here -->
    @include('Frontend.fashion')
    <!-- Section Fashion Ends Here -->

    <section class="best-selling-section padding-bottom-half padding-top-half">
        <div class="container">
            <div class="section-header left-style mb-low">
                <h3 class="title">Top Seling Products</h3>
            </div>
            <div class="row mb-30-none">
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/2/slim-trapered-rip-jeans"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_602a6a82776391613392514.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/2/slim-trapered-rip-jeans">Slim Trapered Rip Jeans</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/2/slim-trapered-rip-jeans" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_60252fb1c5e8d1613049777.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses">Puma Pink ladies dresses</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(1)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/20/regulator-automatic-blue-slate"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_602774dd1bfd51613198557.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/20/regulator-automatic-blue-slate">Regulator Automatic Blue Slate</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/20/regulator-automatic-blue-slate" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/7/man-white-sneakers"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_602b890e609081613465870.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/7/man-white-sneakers">Man White Sneakers</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(1)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/7/man-white-sneakers" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/19/tomford-sunglass"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_6028c8f461fea1613285620.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/19/tomford-sunglass">Tomford Sunglass</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/19/tomford-sunglass" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="best-sell-item">
                        <div class="best-sell-inner">
                            <div class="thumb">
                                <a href="https://script.viserlab.com/visermart/product/detail/5/tomford-glass"><img src="https://script.viserlab.com/visermart/assets/images/product/thumb_6006a17e4fc301611047294.jpg" alt="products-sell"></a>
                            </div>
                            <div class="content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/5/tomford-glass">Tomford Glass</a>
                                </h6>
                                <div class="ratings-area justify-content-between">
                                    <div class="ratings">
                                        <i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(0)</span>
                                </div>
                                <a href="https://script.viserlab.com/visermart/product/detail/5/tomford-glass" class="read-more cl-1">View More<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Category Section Starts Here -->
    <div class="category-section padding-bottom-half">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 padding-bottom-half padding-top-half">
                    <div class="section-header-2">
                        <h3 class="title">Top Categories</h3>
                        <a href="https://script.viserlab.com/visermart/categories" class="custom-button theme btn-sm">View All</a>
                    </div>
                    <div class="m--10">
                        <div class="category-slider owl-theme owl-carousel">

                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/2/clothing" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/6029109754ad21613303959.jpg" alt="products-category">
                                    <span>Clothing</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/4/clothing" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/6002844ea52b31610777678.jpg" alt="products-category">
                                    <span>Clothing</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/5/shoes" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/602911049a4b51613304068.jpg" alt="products-category">
                                    <span>Shoes</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/6/glasses" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/602911aeccec81613304238.jpg" alt="products-category">
                                    <span>Glasses</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/13/mobiles" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/60291199937041613304217.jpg" alt="products-category">
                                    <span>Mobiles</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/category/14/laptops" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/category/60028b11d20b71610779409.jpg" alt="products-category">
                                    <span>Laptops</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padding-bottom-half padding-top-half">
                    <div class="section-header-2">
                        <h3 class="title">Top Brands</h3>
                        <a href="https://script.viserlab.com/visermart/brands" class="custom-button theme btn-sm">View All</a>
                    </div>
                    <div class="m--10">
                        <div class="category-slider owl-theme owl-carousel">
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/1/samsung" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/600299a9a37f91610783145.png" alt="products-category">
                                    <span>Samsung</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/4/hm" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6002b06f443e71610788975.jpg" alt="products-category">
                                    <span>H&amp;M</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/7/levis" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6002b17d2ac301610789245.jpg" alt="products-category">
                                    <span>Levis</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/22/asics" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6002b4270057a1610789927.jpg" alt="products-category">
                                    <span>Asics</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/25/nike" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6002b47c9a3221610790012.jpg" alt="products-category">
                                    <span>Nike</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/29/loreal" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6024f70c441e21613035276.jpg" alt="products-category">
                                    <span>L’Oreal</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/31/diamond-world" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6027821b99b071613201947.jpg" alt="products-category">
                                    <span>Diamond world</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/34/yamaha" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/602919f85fcaa1613306360.png" alt="products-category">
                                    <span>Yamaha</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/35/adidas" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/60291c03410471613306883.png" alt="products-category">
                                    <span>Adidas</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/36/lego" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/602a3d2d7fbb41613380909.png" alt="products-category">
                                    <span>Lego</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/38/better-world" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/602cdc53954a51613552723.png" alt="products-category">
                                    <span>Better World</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/39/sky-art" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/6068522f846281617449519.png" alt="products-category">
                                    <span>Sky Art</span>
                                </a>
                            </div>
                            <div class="cate-item">
                                <a href="https://script.viserlab.com/visermart/brands/40/fimi" class="cate-inner">
                                    <img src="https://script.viserlab.com/visermart/assets/images/brand/60685229d848e1617449513.png" alt="products-category">
                                    <span>FIMI</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Section Ends Here -->

    <!-- Footer Section Starts Here -->

    @include('Frontend.footer')
   
    <!-- Footer Section Ends Here -->

    <!--modal Start--->

    @include('Frontend.modal')
    <!--modal End-->





    @include('Frontend.script')






</body>

</html>