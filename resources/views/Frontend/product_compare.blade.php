<!DOCTYPE html>
<html lang="en">

<head>
    <title>Viser - Product Comparison</title>
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
    <div id="body-overlay" class="body-overlay"></div>
    <div class="cart-sidebar-area" id="cart-sidebar-area">
        <div class="top-content">
            <a href="https://script.viserlab.com/visermart" class="logo">
                <img src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo_2.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products cart--products">


            </div>
        </div>
    </div>
    <!-- ===========Cart End=========== -->

    <!-- ===========Wishlist=========== -->
    @include('Frontend.wishlist')
    <!-- ===========Wishlist End=========== -->

    <!-- Header Section Ends Here -->
    <div class="dashboard-menu before-login-menu d-flex flex-wrap justify-content-center flex-column">
        <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
        <div class="login-wrapper py-5 px-4">
            <h4 class="subtitle cl-white">My Account</h4>
            <form method="POST" action="https://script.viserlab.com/visermart/login" class="sign-in-form">
                <input type="hidden" name="_token" value="0pAzGkZHJCIMd7zGjf7y2xZhkcpvNkgqTd1hMkti">
                <div class="form-group">
                    <label for="login-username">Username</label>
                    <input type="text" class="form-control" name="username" id="login-username" value="" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="login-pass">Password</label>
                    <input type="password" class="form-control" name="password" id="login-pass" placeholder="********">
                </div>


                <div class="form-group">
                    <label for="password">Captcha</label>
                    <input type="text" class="mb-4" name="captcha" autocomplete="off" placeholder="Enter The Code Below">
                    <link href="https://fonts.googleapis.com/css?family=Henny+Penny&display=swap" rel="stylesheet">
                    <div class='login captcha'><span style="    float:left;     -webkit-transform: rotate(-15deg);">4</span><span style="    float:left;     -webkit-transform: rotate(-41deg);">8</span><span style="    float:left;     -webkit-transform: rotate(-7deg);">8</span><span style="    float:left;     -webkit-transform: rotate(51deg);">4</span><span style="    float:left;     -webkit-transform: rotate(43deg);">1</span><span style="    float:left;     -webkit-transform: rotate(16deg);">4</span></div><input type="hidden" name="captcha_secret" value="cb54dc1866d33b5ed51951e1a7f80955168aa0db88e67a7487b1b96ec7fbe2a9">
                </div>

                <div class="form-group text-right pt-2">
                    <button type="submit" class="login-button">Login</button>
                </div>

                <div class="pt-2 mb-0">
                    <p class="create-accounts">
                        <a href="https://script.viserlab.com/visermart/password/reset" class="mb-2">Forgot Password?</a>
                    </p>
                    <p class="create-accounts">
                        <span>Don't have an account? <a href="https://script.viserlab.com/visermart/register" class="link-color">Create An Account</a> </span>
                    </p>
                </div>
            </form>
        </div>



    </div>
    <div class="hero-section section-bg py-4">
        <div class="container">
            <ul class="breadcrumb">

                <li><a href="https://script.viserlab.com/visermart">Home</a></li>

                <li>Product Comparison</li>

            </ul>
        </div>
    </div>
    <!-- section start -->
    <div class="compare-section padding-bottom padding-top">
        <div class="container">
            <div class="oh">
                <div class="compare-table-wrapper">

                    <table class="compare-table">
                        <tbody>

                            <tr class="th-compare">
                                @foreach($all_compare as $item)
                                <th class="product-7 text-right">
                                    <a href="/compare/product/delete/{{$item->id}}" type="button" data-pid="7" class="remove-compare"><i class="las la-trash"></i></a>
                                </th>
                                @endforeach

                            </tr>

                            <tr>

                                @foreach($all_compare as $item)
                                <td class="align-top product-7">
                                    <div class="compare-thumb">
                                        <img src="{{asset('images/'.$item->product_image)}}" alt="featured" style="width:400px; height:350px">
                                    </div>
                                    <div class="name">
                                        {{$item->product_title}}
                                    </div>
                                </td>
                                @endforeach

                            </tr>

                            <tr>
                                @foreach($all_product as $data)

                                @foreach ($all_compare as $item)

                                @if($data->id == $item->product_id)


                                <td class="p-0 product-7">

                                    <ul class="compare-specification">

                                        @if($data->regular_price !='')
                                        <li>

                                            <span class="title">Price</span>
                                            <span class="info">{{$data->regular_price}}</span>

                                        </li>
                                        @endif

                                        @if($data->discount_price !='')
                                        <li>

                                            <span class="title">Discount Price</span>
                                            <span class="info">{{$data->discount_price}}</span>

                                        </li>
                                        @endif

                                        @if($data->title1 !='')
                                        <li>
                                            <span class="title">{{$data->title1}}</span>
                                            <span class="info">{{$data->description1}}</span>
                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif

                                        @if($data->title2 !='')
                                        <li>
                                            <span class="title">{{$data->title2}}</span>
                                            <span class="info">{{$data->description2}}</span>
                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif



                                        @if($data->title3 !='')
                                        <li>

                                            <span class="title">{{$data->title3}}</span>
                                            <span class="info">{{$data->description3}}</span>

                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif

                                        @if($data->title4 !='')
                                        <li>

                                            <span class="title">{{$data->title4}}</span>
                                            <span class="info">{{$data->description4}}</span>

                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif

                                        @if($data->title5 !='')
                                        <li>

                                            <span class="title">{{$data->title5}}</span>
                                            <span class="info">{{$data->description5}}</span>

                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif

                                        @if($data->stock_quantity !='')
                                        <li>

                                            <span class="title">Stock</span>
                                            <span class="info">{{$data->stock_quantity}}</span>

                                        </li>
                                        @else
                                        <li style="height: 43px;">



                                        </li>
                                        @endif





                                    </ul>

                                </td>




                                @endif

                                @endforeach

                                @endforeach


                            </tr>





                            <tr>
                                @foreach($all_compare as $item)
                                <td class="product-7"><a href="https://script.viserlab.com/visermart/product/detail/7/man-white-sneakers" class="cmn-btn btn-block">Buy Now</a></td>
                                @endforeach
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Section ends -->


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
                            <a href="/cdn-cgi/l/email-protection#d4a0b1a7a094a7bda0b1fab7bbb9"><i class="las la-envelope"></i><span class="__cf_email__" data-cfemail="413524323501322835246f222e2c">[email&#160;protected]</span></a>
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
</body>

</html>