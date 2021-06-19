<!DOCTYPE html>
<html lang="en">

<head>
   @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        

        <!--sidebae start--> 
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
                        <h6 class="page-title">All Subscribers</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <a href="https://script.viserlab.com/visermart/admin/promotion/subscriber/send_email" class="btn btn-sm btn--primary box--shadow1 text--small"><i class="la la-envelope-open-text"></i>Send Email To All</a>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive table-responsive--sm">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Email</th>
                                                <th>Subscribed At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="S.N.">1</td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e6edeee5e0f3e2eeecf1e0eff8c1e6ece0e8edafe2eeec">[email&#160;protected]</a></td>
                                                <td data-label="Subscribed At">13 Apr, 2021 12:02 PM</td>
                                                <td data-label="Action">

                                                    <a href="https://script.viserlab.com/visermart/admin/promotion/subscriber/send_email/7" class="icon-btn btn--primary box--shadow1 text--small"><i class="la la-envelope-open-text" data-toggle="tooltip" data-title="Send Email"></i></a>

                                                    <a href="javascript:void(0)" data-id="7" data-email="glodarcompany@gmail.com" class="icon-btn btn--danger removeBtn" data-toggle="tooltip" data-original-title="Remove">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">2</td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45232c2b24293120363105312036316b262a28">[email&#160;protected]</a></td>
                                                <td data-label="Subscribed At">28 Mar, 2021 12:41 PM</td>
                                                <td data-label="Action">

                                                    <a href="https://script.viserlab.com/visermart/admin/promotion/subscriber/send_email/6" class="icon-btn btn--primary box--shadow1 text--small"><i class="la la-envelope-open-text" data-toggle="tooltip" data-title="Send Email"></i></a>

                                                    <a href="javascript:void(0)" data-id="6" data-email="finaltest@test.com" class="icon-btn btn--danger removeBtn" data-toggle="tooltip" data-original-title="Remove">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">3</td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1662736562567b777f7a3875797b">[email&#160;protected]</a></td>
                                                <td data-label="Subscribed At">18 Jul, 2020 01:00 PM</td>
                                                <td data-label="Action">

                                                    <a href="https://script.viserlab.com/visermart/admin/promotion/subscriber/send_email/2" class="icon-btn btn--primary box--shadow1 text--small"><i class="la la-envelope-open-text" data-toggle="tooltip" data-title="Send Email"></i></a>

                                                    <a href="javascript:void(0)" data-id="2" data-email="test@mail.com" class="icon-btn btn--danger removeBtn" data-toggle="tooltip" data-original-title="Remove">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">4</td>
                                                <td data-label="Email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="492b2c3a3d0924282025672a2624">[email&#160;protected]</a></td>
                                                <td data-label="Subscribed At">18 Jul, 2020 01:00 PM</td>
                                                <td data-label="Action">

                                                    <a href="https://script.viserlab.com/visermart/admin/promotion/subscriber/send_email/3" class="icon-btn btn--primary box--shadow1 text--small"><i class="la la-envelope-open-text" data-toggle="tooltip" data-title="Send Email"></i></a>

                                                    <a href="javascript:void(0)" data-id="3" data-email="best@mail.com" class="icon-btn btn--danger removeBtn" data-toggle="tooltip" data-original-title="Remove">
                                                        <i class="las la-trash"></i>
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




                                        <li>
                                        </li>
                                    </ul>
                                </nav>


                            </div>
                        </div><!-- card end -->
                    </div>


                </div>


                <div id="removeModal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Subscriber </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="https://script.viserlab.com/visermart/admin/promotion/subscriber/remove" method="POST">
                                <input type="hidden" name="_token" value="3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9">
                                <div class="modal-body">
                                    <input type="hidden" name="subscriber">
                                    <p>Are you sure to remove <span class="font-weight-bold subscriber-email"></span> from subscribers?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn--dark" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-sm btn--danger">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






   @include('Admin.script')

</body>

</html>