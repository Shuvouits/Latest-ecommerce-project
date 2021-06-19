<!DOCTYPE html>
<html lang="en">

<head>
    <title>Viser - Products by Category - Men&#039;s Fashion</title>
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

    <div class="hero-section section-bg py-4">
        <div class="container">
            <ul class="breadcrumb">

                <li><a href="https://script.viserlab.com/visermart">Home</a></li>

                <li>Products by Category - {{$category_name}}</li>
                @if($brand_name !='')
                <li> / Brand - {{$brand_name}}</li>
                @endif

                @if($price_value !='')
                <li> / Price - {{$price_value}}</li>
                @endif


            </ul>
        </div>
    </div>
    <!-- Category Section Starts Here -->
    <div class="category-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <aside class="category-sidebar position-relative">
                        <div class="widget d-xl-none">
                            <div class="d-flex justify-content-between">
                                <h5 class="title border-0 pb-0 mb-0">Filter</h5>
                                <div class="close-sidebar"><i class="las la-times"></i></div>
                            </div>
                        </div>

                        <div class="widget">

                            <h5 class="title">Filter by Price</h5>

                            <div class="widget-body">

                                <div class="widget-check-group price-filter">

                                    @if($price_value =='1000')
                                    <input type="checkbox" checked name="price" class="common_selector price hellow" value="1000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/1000';">
                                    @else
                                    <input type="checkbox" name="price" class="common_selector price hellow" value="1000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/1000';">
                                    @endif
                                    <label for="brand-1">1-1000</label>
                                </div>

                                <div class="widget-check-group price-filter">
                                    @if($price_value=='2000')
                                    <input type="checkbox" checked name="price" class="common_selector price hellow" value="2000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/2000';">
                                    @else
                                    <input type="checkbox" name="price" class="common_selector price hellow" value="2000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/2000';">
                                    @endif
                                    <label for="brand-1">1000-2000</label>

                                </div>

                                <div class="widget-check-group price-filter">
                                    @if($price_value=='3000')
                                    <input type="checkbox" checked name="price" class="common_selector price hellow" value="3000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/3000';">
                                    @else
                                    <input type="checkbox" name="price" class="common_selector price hellow" value="3000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/3000';">
                                    @endif

                                    <label for="brand-1">2000-3000</label>
                                </div>

                                <div class="widget-check-group price-filter">

                                    @if($price_value=='4000')
                                    <input type="checkbox" checked name="price" class="common_selector price hellow" value="4000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/4000';">
                                    @else
                                    <input type="checkbox" name="price" class="common_selector price hellow" value="4000" onClick="Javascript:window.location.href = '/product/category/{{$category_name}}/price/4000';">
                                    @endif
                                    <label for="brand-1">3000-4000</label>
                                </div>


                            </div>

                        </div>



                        <div class="widget">
                            <h5 class="title">Filter by Brand</h5>

                            <div class="widget-body">


                                @foreach($all_brand as $item)
                                <div class="widget-check-group brand-filter">
                                    @if($item->brand_name == $brand_name)
                                    <input type="checkbox" checked value="" name="brand" id="brand-4" onClick="Javascript:window.location.href = '/product/{{$category_name}}/brand/{{$item->brand_name}}';">
                                    @else
                                    <input type="checkbox" value="" name="brand" id="brand-4" onClick="Javascript:window.location.href = '/product/{{$category_name}}/brand/{{$item->brand_name}}';">
                                    @endif
                                    <label for="brand-4">{{$item->brand_name}}</label>
                                </div>
                                @endforeach

                            </div>
                        </div>



                    </aside>
                </div>
                <div class="col-xl-9">

                    <div class="filter-category-header">

                        <div class="fileter-select-item">
                            <div class="select-item product-page-per-view">
                                <select class="select-bar bg-3" name="per_page">
                                    <option value="">Products Per Page</option>
                                    <option value="5">5 Items Per Page </option>
                                    <option value="15" selected>15 Items Per Page </option>
                                    <option value="30">30 Items Per Page </option>
                                    <option value="50">50 Items Per Page </option>
                                    <option value="100">100 Items Per Page </option>
                                    <option value="200">200 Items Per Page </option>
                                </select>
                            </div>
                        </div>

                        <div class="fileter-select-item d-none d-lg-block ml-auto align-self-end">

                            <ul class="view-number">
                                <li class="change-grid-to-6">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </li>
                                <li class="change-grid-to-4 active">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </li>
                                <li class="change-grid-to-3">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="fileter-select-item ml-auto ml-lg-0 align-self-end">
                            <ul class="view-style d-flex">
                                <li>
                                    <a href="javascript:void(0)" class="active view-grid-style"><i class="las la-border-all"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="view-list-style"><i class="las la-list-ul"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="fileter-select-item align-self-end d-xl-none pl-0">
                            <div class="filter-in">
                                <i class="las la-filter"></i>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div id="overlay">
                            <div class="cv-spinner">
                                <span class="spinner"></span>
                            </div>
                        </div>
                        <div class="overlay-2" id="overlay2"></div>
                        <div class="page-main-content">
                            <div class="row mb-30-none page-main-content" id="grid-view">

                                @if($target_product_count > 0)

                                @foreach($target_product as $item)
                                <div class="col-lg-4 col-sm-6 grid-control mb-30">
                                    <div class="product-item-2 m-0">
                                        <div class="product-item-2-inner wish-buttons-in">
                                            <div class="product-thumb">
                                                <ul class="wish-react">
                                                    <li>
                                                        <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="2"><i class="lar la-heart"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="/product/compare/{{$item->id}}" title="Compare" class="add-to-compare " data-id="2"><i class="las la-sync-alt"></i></a>
                                                    </li>
                                                </ul>
                                                <a href="/product/details/{{$item->product_title}}">
                                                    <img src="{{asset('images/'.$item->image)}}" alt="flash" style="width:400px; height:350px" class="img-thumbnail">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-before-content">
                                                    <h6 class="title">
                                                        <a href="https://script.viserlab.com/visermart/product/detail/2/slim-trapered-rip-jeans">Slim Trapered Rip Jeans</a>
                                                    </h6>
                                                    <h6 class="title mt-1">
                                                        Brand : {{$item->product_brand}}
                                                    </h6>
                                                    <div class="single_content">
                                                        <p>Washing Instructions Machine wash warm at 40C. Do not bleach. Tumble dry normal low heat. Iron low heat. Dry clean, if needed.
                                                            Product Material 99% Cotton 1% Elastane</p>
                                                    </div>
                                                    <div class="ratings-area justify-content-between">

                                                        <div class="ratings">
                                                            @if($item->review_score ==1)
                                                            <i class="lar la-star"></i>
                                                            @endif

                                                            @if($item->review_score ==2)
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            @endif

                                                            @if($item->review_score ==3)
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            @endif

                                                            @if($item->review_score ==4)
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            <i class="lar la-star"></i>
                                                            @endif



                                                        </div>

                                                        @if($item->review_count == 0)
                                                        <span class="ml-2 mr-auto">(0)</span>
                                                        @else
                                                        <span class="ml-2 mr-auto">({{$item->review_count}})</span>
                                                        @endif

                                                        <div class="price">
                                                            TK.{{$item->regular_price}}

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-after-content">
                                                    <button data-product="2" class="cmn-btn btn-sm quick-view-btn" data-toggle="modal" data-target="#product{{$item->id}}">
                                                        View </button>
                                                    <div class="price">
                                                        TK.{{$item->regular_price}}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @else
                                <h4 style="margin-left:20px">No Product Found</h4>

                                @endif



                            </div>

                            <nav class="shuvo">
                                <ul class="pagination">
                                    <li>
                                        <span class="style">

                                            {{ $target_product->links('pagination::bootstrap-4') }}
                                        </span>

                                    </li>

                                </ul>

                            </nav>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Section Ends Here -->

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
                            <a href="/cdn-cgi/l/email-protection#fc88998f88bc8f958899d29f9391"><i class="las la-envelope"></i><span class="__cf_email__" data-cfemail="116574626551627865743f727e7c">[email&#160;protected]</span></a>
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

    @foreach($all_product as $item)



    <div class="modal fade" id="product{{$item->id}}">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div id="demo" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    @if($item->image1 !='')
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    @endif

                                    @if($item->image2 !='')
                                    <li data-target="#demo" data-slide-to="2"></li>
                                    @endif

                                    @if($item->image3 !='')
                                    <li data-target="#demo" data-slide-to="3"></li>
                                    @endif

                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">

                                    @if($item->image !='')
                                    <div class="carousel-item active">
                                        <img src="{{asset('images/'.$item->image)}}" alt="Los Angeles" width="500" height="500">
                                    </div>
                                    @endif

                                    @if($item->image1 !='')
                                    <div class="carousel-item">
                                        <img src="{{asset('images/'.$item->image1)}}" alt="Chicago" width="500" height="500">
                                    </div>
                                    @endif

                                    @if($item->image2 !='')
                                    <div class="carousel-item">
                                        <img src="{{asset('images/'.$item->image2)}}" alt="New York" width="500" height="500">
                                    </div>
                                    @endif

                                    @if($item->image3 !='')
                                    <div class="carousel-item">
                                        <img src="{{asset('images/'.$item->image3)}}" alt="New York" width="500" height="500">
                                    </div>
                                    @endif

                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="product-details-content product-details">
                                <h4 class="title mt-3">{{$item->product_title}}</h4>
                                <div class="ratings-area justify-content-between">

                                    <div class="ratings">
                                        <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                    </div>
                                    <span class="ml-2 mr-auto">(1)</span>

                                </div>

                                <div class="badge badge--success stock-status">
                                    In Stock (<span class="stock-qty">{{$item->stock_quantity}}</span>)
                                </div>

                                <div class="price">
                                    TK.<span class="special_price">{{$item->regular_price - $item->discount_price}}</span>
                                    <del>TK.</del><del class="price-data">{{$item->regular_price}}</del>
                                </div>


                                <p> {{$item->product_description}} </p>

                                <div class="cart-and-coupon mt-3">

                                    <div class="attr-data">
                                    </div>


                                    <form method="post" action="/product/cart">

                                        {{@csrf_field()}}
                                        <input type="hidden" name="product_id" value="{{$item->id}}">

                                        <div class="cart-plus-minus quantity">
                                            <div class="cart-decrease qtybutton dec">
                                                <i class="las la-minus"></i>
                                            </div>

                                            <input type="number" name="product_quantity" step="1" min="1" value="1" class="integer-validation">
                                            <div class="cart-increase qtybutton inc">
                                                <i class="las la-plus"></i>
                                            </div>

                                            <span class="add-cart" style="margin-top: -1px;">
                                                <button type="submit" class="cmn-btn cart-add-btn" data-id="18">Add To Cart</button>
                                            </span>

                                        </div>



                                    </form>



                                </div>

                            </div>

                            <p>
                                <b>
                                    Categories:
                                </b>
                                <a href="/product/category/{{$item->product_category}}">{{$item->product_category}}</a>
                                /
                                @foreach($all_subcategory as $data)

                                @if($item->product_subcategory == $data->id)
                                <a href="/product/subcategory/{{$data->subcategory_name}}">{{$data->subcategory_name}}</a>
                                @endif

                                @endforeach

                            </p>

                            <p>
                                <b>Brand:</b> {{$item->product_brand}}
                            </p>

                            <p>
                                <b>SKU:</b> <span class="product-sku">111VM031</span>
                            </p>


                            <p class="product-details-wishlist">
                                <b>Add To Wishlist: </b>
                                <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="18"><span class="wish-icon"></span></a>
                            </p>

                            <div class="add-cart">
                                <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cmn-btn">View More</a>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



    @endforeach


    @include('Frontend.script');
</body>

</html>