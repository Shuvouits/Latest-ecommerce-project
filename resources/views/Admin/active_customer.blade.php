<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin/link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!--sidebar start--->
        @include('Admin.sidebar')
        <!-- sidebar end -->
        
        <!-- navbar-wrapper start -->

        <nav class="navbar-wrapper">
            <form class="navbar-search" onsubmit="return false;">
                <button type="submit" class="navbar-search__btn">
                    <i class="las la-search"></i>
                </button>
                <input type="search" name="navbar-search__field" id="navbar-search__field" placeholder="Search...">
                <button type="button" class="navbar-search__close"><i class="las la-times"></i></button>

                <div id="navbar_search_result_area">
                    <ul class="navbar_search_result"></ul>
                </div>
            </form>

            <div class="navbar__left">
                <button class="res-sidebar-open-btn"><i class="las la-bars"></i></button>
                <button type="button" class="fullscreen-btn">
                    <i class="fullscreen-open las la-compress" onclick="openFullscreen();"></i>
                    <i class="fullscreen-close las la-compress-arrows-alt" onclick="closeFullscreen();"></i>
                </button>
            </div>

            <div class="navbar__right">
                <ul class="navbar__action-list">
                    <li>
                        <button type="button" class="navbar-search__btn-open">
                            <i class="las la-search"></i>
                        </button>
                    </li>
                    <li>
                        <a href="https://script.viserlab.com/visermart" target="blank" class="font-weight-bold text--black">
                            <i class="las la-cart-plus"></i> Visit Store </a>
                    </li>

                    <li class="dropdown">
                        <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            <span class="navbar-user">

                                <span class="navbar-user__thumb">
                                    <img src="https://script.viserlab.com/visermart/assets/images/lang/5ffe84073745e1610515463.png" alt="image">
                                </span>

                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">English</span>
                                </span>

                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/visermart/change/bn" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                                <span class="dropdown-menu__caption">Bangla</span>
                            </a>
                            <a href="https://script.viserlab.com/visermart/change/es" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                                <span class="dropdown-menu__caption">Spanish</span>
                            </a>
                            <a href="https://script.viserlab.com/visermart/change/fr-fr" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                                <span class="dropdown-menu__caption">france</span>
                            </a>
                            <a href="https://script.viserlab.com/visermart/change/de" class="dropdown-menu__item d-flex align-items-center px-3 py-2">

                                <span class="dropdown-menu__caption">german</span>
                            </a>
                        </div>
                    </li>


                    <li class="dropdown">
                        <button type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb">
                                    <img src="https://script.viserlab.com/visermart/assets/admin/images/profile/5f950b85aad861603603333.jpg" alt="image">
                                </span>

                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/visermart/admin/profile" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>

                            <a href="https://script.viserlab.com/visermart/admin/password" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>

                            <a href="https://script.viserlab.com/visermart/admin/logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Active Customers</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-xl-4 col-lg-6 mb-3">
                                        <form action="https://script.viserlab.com/visermart/admin/customers/active/search" method="GET" class="form-inline float-sm-right bg--white">
                                            <div class="input-group has_append">
                                                <input type="text" name="search" class="form-control" placeholder="Username Or Email" value="">
                                                <div class="input-group-append">
                                                    <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive--md  table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Joined At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Rajesh Kumar</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/67">rajeshrajan71</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aedccfc4cbddc6c8c1dccacfdacfeec9c3cfc7c280cdc1c3">[email&#160;protected]</a></td>
                                                <td data-label="Phone">9108075488034</td>
                                                <td data-label="Joined At">28 Apr, 2021 02:11 PM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/67" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Sivapradeep Rajamani</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/66">sivapradeep</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50233926317e232022103f25243c3f3f3b7e333f3d">[email&#160;protected]</a></td>
                                                <td data-label="Phone">9109585159759</td>
                                                <td data-label="Joined At">28 Apr, 2021 11:33 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/66" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Arjun Kumar</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/65">Arjun121</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6405160e110a0f1109051653515256240309050d084a070b09">[email&#160;protected]</a></td>
                                                <td data-label="Phone">919262383305</td>
                                                <td data-label="Joined At">28 Apr, 2021 08:30 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/65" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">asd asd</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/64">nstefan</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d5dbd1c7f2d3c1d69cc0dd">[email&#160;protected]</a></td>
                                                <td data-label="Phone">40123456789</td>
                                                <td data-label="Joined At">27 Apr, 2021 12:51 PM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/64" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Rajiv Loona</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/63">adminsdfas</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f6959e97989297989d839b9784868385979e99c0c2c3b6919b979f9ad895999b">[email&#160;protected]</a></td>
                                                <td data-label="Phone">919304538240</td>
                                                <td data-label="Joined At">27 Apr, 2021 12:36 PM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/63" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Osaed Yahya</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/62">OsaedYah</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f9968a989c9dc8b995908f9cd7">[email&#160;protected]</a>com</td>
                                                <td data-label="Phone">970595989984</td>
                                                <td data-label="Joined At">27 Apr, 2021 02:51 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/62" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Gom Gomer</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/61">gomgomer</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="42252d2f252d2f273002252f232b2e6c212d2f">[email&#160;protected]</a></td>
                                                <td data-label="Phone">995555339455</td>
                                                <td data-label="Joined At">26 Apr, 2021 05:06 PM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/61" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Chrysostomos Pogiatzis</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/60">tomakis95</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63170c0e02080a105a5623040e020a0f4d000c0e">[email&#160;protected]</a></td>
                                                <td data-label="Phone">35797624744</td>
                                                <td data-label="Joined At">26 Apr, 2021 09:37 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/60" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Test Tester</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/59">Tester</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d49584e49584f7d5a505c5451135e5250">[email&#160;protected]</a></td>
                                                <td data-label="Phone">23478954289</td>
                                                <td data-label="Joined At">26 Apr, 2021 06:49 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/59" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Kero Hero</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/58">keroherox10</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e4e9edeff8efb6b6b5b0c0e9ecf5e4e9f2aee3efed">[email&#160;protected]</a></td>
                                                <td data-label="Phone">2001015232142</td>
                                                <td data-label="Joined At">26 Apr, 2021 02:56 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/58" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">teste testei</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/57">aateste</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d4c4349485f5e4243595c5e6d4a404c4441034e4240">[email&#160;protected]</a></td>
                                                <td data-label="Phone">5581989010423</td>
                                                <td data-label="Joined At">26 Apr, 2021 02:52 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/57" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/user/profile/1619396146_jhjhjhghghg.jpg" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/user/profile/1619396146_jhjhjhghghg.jpg" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">hgh fgfg</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/56">jhjhjhghghg</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f2728280f28222e2623612c2022">[email&#160;protected]</a></td>
                                                <td data-label="Phone">44877878787</td>
                                                <td data-label="Joined At">26 Apr, 2021 12:13 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/56" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">sdfwefwef wefwefqwef</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/55">tsetewtewtwet</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7416060d151a1f061d07001b12121106061d02110615341319151d185a171b19">[email&#160;protected]</a></td>
                                                <td data-label="Phone">633546516351</td>
                                                <td data-label="Joined At">25 Apr, 2021 01:38 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/55" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">Juris Saveljevs</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/54">ysZevs</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac084d9cbdccfc6c0cfdcd9eac3c4c8c5d284c6dc">[email&#160;protected]</a></td>
                                                <td data-label="Phone">37123277186</td>
                                                <td data-label="Joined At">24 Apr, 2021 03:24 PM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/54" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="User">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                                <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="image">
                                                            </a>
                                                        </div>
                                                        <span class="name">hacker tester</span>
                                                    </div>
                                                </td>
                                                <td data-label="Username"><a href="https://script.viserlab.com/visermart/admin/customer/detail/53">hacktest</a></td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="492c2d3a3e2c2d31092c2f212f672a2624">[email&#160;protected]</a></td>
                                                <td data-label="Phone">919924444444</td>
                                                <td data-label="Joined At">24 Apr, 2021 05:29 AM</td>
                                                <td data-label="Action">
                                                    <a href="https://script.viserlab.com/visermart/admin/customer/detail/53" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">



                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item ">
                                            <a class="page-link" href="https://script.viserlab.com/visermart/admin/customers/active?page=2">2</a>
                                        </li>
                                        <li class="page-item ">
                                            <a class="page-link" href="https://script.viserlab.com/visermart/admin/customers/active?page=3">3</a>
                                        </li>
                                        <li class="page-item ">
                                            <a class="page-link" href="https://script.viserlab.com/visermart/admin/customers/active?page=4">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="https://script.viserlab.com/visermart/admin/customers/active?page=2">
                                                <i class="fa fa-angle-right"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>


                            </div>
                        </div><!-- card end -->
                    </div>
                </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>





    @include('Admin.script')

</body>

</html>