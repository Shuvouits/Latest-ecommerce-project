<div class="sidebar capsule--rounded bg_img overlay--dark" data-background="{{asset('Admin/assets/admin/images/sidebar/2.jpg')}}">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="/admin/dashboard" class="sidebar__main-logo"><img src="{{asset('images/logo_2.png')}}" alt="image"></a>
            <a href="#" class="sidebar__logo-shape"><img src="https://script.viserlab.com/visermart/assets/images/logoIcon/favicon.png" alt="image"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">

                <li class="sidebar-menu-item {{$dashboard}} ">
                    <a href="/admin/dashboard" class="nav-link">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">{{__('message.Dashboard')}}</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{$sidebar_menu}}">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title">{{__('message.Customers')}}</span>

                    </a>
                    <div class="sidebar-submenu {{$sidebar_sub_menu}}  ">
                        <ul>
                            <li class="sidebar-menu-item  {{$customers}} ">
                                <a href="/admin/customers" class="nav-link">
                                    <i class="menu-icon las la-user-friends"></i>
                                    <span class="menu-title">{{__('message.All Customer')}}</span>
                                </a>
                            </li>

                           
                          

                          

            
                            <li class="sidebar-menu-item {{$login}}">
                                <a href="/admin/customer/login_history" class="nav-link">
                                    <i class="menu-icon las la-history"></i>
                                    <span class="menu-title">{{__('message.Login History')}}</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{$send_email}}">
                                <a href="/admin/customer/send_email" class="nav-link">
                                    <i class="menu-icon las la-envelope"></i>
                                    <span class="menu-title">{{__('message.Send Email')}}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{$sidebar_product_menu}}">
                        <i class="la la-product-hunt menu-icon"></i>
                        <span class="menu-title">{{__('message.Product')}}</span>
                    </a>
                    <div class="sidebar-submenu {{$sidebar_product_sub_menu}} ">
                        <ul>
                            <li class="sidebar-menu-item {{$category}}">
                                <a class="nav-link" href="/admin/product/categories">
                                    <i class="las la-align-left menu-icon"></i>
                                    <span class="menu-title">{{__('message.Categories')}}</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{$brand}}">
                                <a class="nav-link" href="/admin/product/brands">
                                    <i class="la la-tags menu-icon"></i>
                                    <span class="menu-title">{{__('message.Brands')}}</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{$slider}}">
                                <a class="nav-link" href="/admin/product/slider">
                                    <i class="la la-tags menu-icon"></i>
                                    <span class="menu-title">{{__('message.Slider')}}</span>
                                </a>
                            </li>
                           

                            <li class="sidebar-menu-item {{$all_product}}">
                                <a class="nav-link" href="/admin/product/all_product">
                                    <i class="menu-icon las la-tshirt"></i>
                                    <span class="menu-title">{{__('message.Products')}}</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{$product_reviews}}">
                                <a class="nav-link" href="/admin/product/reviews">
                                    <i class="menu-icon las la-star"></i>
                                    <span class="menu-title">{{__('message.Product Review')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


               

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title">{{__('message.Payment')}}</span>
                        <span class="menu-badge pill bg--primary ml-auto">
                            <i class="fa fa-exclamation"></i>
                        </span>
                    </a>
                    <div class="sidebar-submenu  ">
                        <ul>
                            <li class="sidebar-menu-item  ">
                                <a href="#" class="nav-link">
                                    <i class="menu-icon las la-list-ul"></i>
                                    <span class="menu-title">{{__('message.All Payment')}}</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="#" class="nav-link">
                                    <i class="menu-icon las la-pause-circle"></i>
                                    <span class="menu-title">{{__('message.Pending Payment')}}</span>
                                    <span class="menu-badge pill bg--primary ml-auto">16</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="#" class="nav-link">
                                    <i class="menu-icon las la-check-circle"></i>
                                    <span class="menu-title">{{__('message.Approved Payment')}}</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="#" class="nav-link">
                                    <i class="menu-icon las la-check-double"></i>
                                    <span class="menu-title">{{__('message.Successful Payment')}}</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="#" class="nav-link">
                                    <i class="menu-icon las la-times-circle"></i>
                                    <span class="menu-title">{{__('message.Rejected Payment')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="las la-money-bill menu-icon"></i>
                        <span class="menu-title">{{__('message.Orders')}}</span>
                        <span class="menu-badge pill bg--primary ml-auto">
                            <i class="las la-bell"></i>
                        </span>
                    </a>
                    <div class="sidebar-submenu  ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-list-ol"></i>
                                    <span class="menu-title">All Orders</span>

                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-pause-circle"></i>
                                    <span class="menu-title">Pending Orders</span>
                                    <span class="badge bg--primary badge-pill ml-2"><i class="fas fa-exclamation"></i></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-spinner"></i>
                                    <span class="menu-title">Processing Orders</span>
                                    <span class="badge bg--primary badge-pill ml-2"><i class="fas fa-exclamation"></i></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-shopping-basket"></i>

                                    <span class="menu-title">Dispatched Orders</span>

                                    <span class="badge bg--primary badge-pill ml-2"><i class="fas fa-exclamation"></i></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-check-circle"></i>
                                    <span class="menu-title">Delivered Orders </span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-times-circle"></i>
                                    <span class="menu-title">Canceled Orders</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="#">
                                    <i class="menu-icon las la-hand-holding-usd"></i>
                                    <span class="menu-title"><abbr data-toggle="tooltip" title="Cash On Delivery">COD</abbr> Orders</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>


        </div>
    </div>
</div>