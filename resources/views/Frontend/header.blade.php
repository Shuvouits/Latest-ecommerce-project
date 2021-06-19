<div class="header-top bg-3 py-1 border-bottom-1 d-none d-lg-block">
    <div class="container">
        <div class="header-top-wrap d-flex flex-wrap justify-content-between align-items-center">
            <div class="right-side">
                <ul>

                    <li><a href="#">Returns and Exchanges</a></li>
                    <li><a href="#">Shipping and Delivery</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy and Policies</a></li>

                    <li><a href="#">Track Your Order</a></li>
                </ul>
            </div>
            <div class="left-side">
                <div class="language_setting">
                    <div class="active_lang ">




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
        </div>
    </div>
</div>
<div class="header-middle bg-white py-3">
    <div class="container">
        <div class="header-wrapper justify-content-between align-items-center">
            <div class="logo">
                <a href="https://script.viserlab.com/visermart">
                    <img src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu ml-auto d-none d-lg-flex">
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/product">Products</a>
                </li>

                <li>
                    <a href="/brands">Brands</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>

<div class="header-bottom bg-3 py-3">
    <div class="container">
        <div class="header-bottom-wrapper d-flex flex-wrap justify-content-between align-items-center">
            <div class="view-category d-none d-lg-block   d-xl-none ">
                <a href="javascript:void(0)">Categories<i class="las la-angle-down"></i></a>
            </div>
            <form action="visermart/products/search" method="get" class="header-search-form mr-auto ">
                
                <div class="header-form-group">
                    <input type="text" name="search_key" value="" placeholder="Search...">
                    <button type="submit"><i class="las la-search"></i></button>
                </div>
                <div class="select-item">
                    <select class="select-bar" name="search_data">
                        <option selected value="0">All Categories</option>


                        @foreach($all_category as $item)

                        <option value="{{$item->category_name}}">{{$item->category_name}}</option>

                        @foreach($all_subcategory as $data)
                        @if($data->category_id == $item->id)
                        <option value="{{$data->subcategory_name}}">--{{$data->subcategory_name}}</option>
                        @endif
                        @endforeach

                        @endforeach

                    </select>
                </div>
            </form>
            <div class="right-toggle text-right d-xl-none">
                <i class="las la-ellipsis-v"></i>
            </div>
            <ul class="shortcut-icons">
                <li>
                    <a href="javascript:void(0)" class="dashboard-menu-bar">
                        <i class="las la-user"></i>
                    </a>
                </li>
                <li>
                    <a href="/product/compare">
                        <i class="las la-sync-alt"></i>
                        <?php

                        $compare = session()->get('compare');

                        ?>
                        @if($compare =='')
                        <span class="wishlist-count amount">0</span>
                        @else
                        <span class="wishlist-count amount">{{$compare_count}}</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="wish-button">
                        <i class="lar la-heart"></i>
                        <?php

                        $wishlist = session()->get('wishlist');

                        ?>
                        @if($wishlist =='')
                        <span class="wishlist-count amount">0</span>
                        @else
                        <span class="wishlist-count amount">{{$wishlist_count}}</span>
                        @endif

                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" id="cart-button">
                        <i class="las la-shopping-bag"></i>

                        <?php

                        $cart = session()->get('cart');

                        ?>

                        @if($cart=='')
                        <span class="cart-count amount">0</span>
                        @else
                        <span class="cart-count amount">{{$cart_count}}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
        <div class="pos-rel d-none d-lg-block  d-xl-none ">
            <div class="left-category single-style">
                <ul class="categories">
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/1/mens-fashion">
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
                        <a href="https://script.viserlab.com/visermart/category/3/womens-fashion">
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
                        <a href="https://script.viserlab.com/visermart/category/12/electronics">
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
                        <a href="https://script.viserlab.com/visermart/category/18/home-appliances">
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
                        <a href="https://script.viserlab.com/visermart/category/22/automobile-motorcycle">
                            <i class="las la-car-side"></i> Automobile &amp; Motorcycle
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/23/sports-outdoors">
                            <i class="las la-baseball-ball"></i> Sports &amp; Outdoors
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/24/babys-fashion">
                            <i class="las la-child"></i> Baby&#039;s Fashion
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/25/kids-toys">
                            <i class="fas fa-bowling-ball"></i> Kids &amp; Toys
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/26/health-beauty">
                            <i class="lab la-pied-piper-hat"></i> Health &amp; Beauty
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/27/skin-hair-solution">
                            <i class="lab la-mandalorian"></i> Skin &amp; Hair Solution
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/29/gift-items">
                            <i class="las la-gift"></i> Gift Items
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/30/covid-19-protections">
                            <i class="fas fa-theater-masks"></i> COVID 19 Protections
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/34/gift-corner">
                            <i class="fas fa-box-open"></i> Gift Corner
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/37/weddings-events">
                            <i class="far fa-heart"></i> Weddings &amp; Events
                        </a>

                        <div class="cate-icon">
                            <i class="las la-angle-down"></i>
                        </div>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart/category/38/novelty-special-use">
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