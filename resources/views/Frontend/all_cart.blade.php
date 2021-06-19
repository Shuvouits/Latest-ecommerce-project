<!DOCTYPE html>
<html lang="en">

<head>
    <title>Viser - My Cart</title>
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

                <li><a href="/">Home</a></li>
                <li><a href="/product">Products</a></li>

                <li>My Cart</li>

            </ul>
        </div>
    </div>
    <!-- cart-section start -->
    <div class="cart-section padding-bottom padding-top">
        <div class="container">

            @if($cart_count > 0)
            <table class="order-list-table table cart-table m-0">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Variant</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>



                @foreach($all_cart as $item)
                <tr class="cart-row">
                    <td data-label="Product">
                        <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cart-item">
                            <div class="cart-img">
                                <img src="{{asset('images/'.$item->product_image)}}" alt="product-image">
                            </div>
                            <div class="cart-cont">
                                <h6 class="title">{{$item->product_title}}</h6>
                            </div>
                        </a>
                    </td>

                    <td data-name="Variant">
                        N\A </td>


                    <td data-label="Price">
                        TK.{{$item->product_price - $item->discount_price}} </td>

                    <td data-label="Quantity">


                        <input type="hidden" name="product_id" value={{$item->product_id}}>

                        <div class="cart-plus-minus p-0 flex-nowrap justify-content-center quantity">
                            <div class="cart-decrease qtybutton dec">
                                <a href="/cart/{{$item->product_id}}/decrement/{{$item->product_quantity}}"> <i class="las la-minus "></i></a>
                               
                            </div>

                            <input type="number" data-id="831" name="product_quantity" data-price="22.65" class="qty integer-validation" type="number" min="1" step="1" value="{{$item->product_quantity}}">
                            <div class="cart-increase qtybutton inc active">
                                <a href="/cart/{{$item->product_id}}/increment/{{$item->product_quantity}}" style="color:white"><i class="las la-plus plus"></i></a>
                            </div>

                        </div>



                    </td>

                    <td data-label="Total" class="text-right">
                        <div>TK.
                            <span class="total_price">

                                {{$item->total_price}}

                            </span>
                        </div>
                    </td>

                    <td data-label="Action">
                        <a href="/product/cart/remove/{{$item->id}}">
                            <span class="edit remove-cart" data-id="831">
                                <i class="las la-trash"></i>
                            </span>
                        </a>
                    </td>

                </tr>
                @endforeach




            </table>

            <div class="cart-total section-bg ">
                <div class="m--15 d-flex flex-wrap align-items-center justify-content-between">
                    <div class="apply-coupon-code">
                    </div>
                    <div class="total">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="sub--total">Subtotal</div>
                            <span class="amount">TK.
                                <span id="cartSubtotal">
                                    {{$total_amount}}
                                </span>
                            </span>
                        </div>
                        <div class="coupon-amount-total  d-none ">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="sub--total">

                                    <span class="mr-2 cl-theme remove-coupon"><i class="la la-times-circle"></i></span>

                                    <span>Coupon (<b class="couponCode"></b>) </span>

                                </div>
                                <span class="amount">$<span id="couponAmount"> 0</span> </span>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="sub--total"><span>Total </span></div>
                                <span class="amount">$<span id="finalTotal">22.65</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout mt-3 d-flex justify-content-between">
                <a href="/product" class="theme custom-button">Continue Shopping</a>
                <a href="/cart/login" class="theme-2 custom-button">Checkout</a>
            </div>

            @else

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Cart is empty</strong>
            </div>

            @endif

        </div>
    </div>
    <!-- cart-section end -->

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
                            <a href="/cdn-cgi/l/email-protection#afdbcadcdbefdcc6dbca81ccc0c2"><i class="las la-envelope"></i><span class="__cf_email__" data-cfemail="374352444377445e43521954585a">[email&#160;protected]</span></a>
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