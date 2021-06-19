<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.link')
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
                        <h6 class="page-title">Email Unverified Customers</h6>
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
                                        <form action="https://script.viserlab.com/visermart/admin/customers/emailUnverified/search" method="GET" class="form-inline float-sm-right bg--white">
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
                                                <td class="text-muted text-center" colspan="100%">No email unverified customer found</td>
                                            </tr>

                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">




                                        <li>
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