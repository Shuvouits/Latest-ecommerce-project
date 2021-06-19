<!DOCTYPE html>
<html lang="en">

<head>
   @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        
        <!---sidebar start-->
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
                        <h6 class="page-title">All Attrubute Types</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <button data-toggle="modal" data-target="#addModal" class="btn btn-sm btn--success box--shadow1 text--small"> <i class="la la-plus"></i>Add New</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body">

                                <div class="row justify-content-end">
                                    <div class="col-lg-4 mb-3">
                                        <form action="" method="GET">
                                            <div class="input-group has_append">
                                                <input type="text" name="search" class="form-control" placeholder="Search..." value="">
                                                <div class="input-group-append">
                                                    <button class="btn btn--success" id="search-btn" type="submit"><i class="la la-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="table-responsive--md  table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Name</th>
                                                <th>Name for User</th>
                                                <th>Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td data-label="S.N.">1</td>
                                                <td data-label="Name">Memory as Text</td>
                                                <td data-label="Name for User">Memory</td>
                                                <td data-label="Type"> Text </td>
                                                <td data-label="Action">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="Edit" data-id="5" data-name="Memory as Text" data-name_for_user="Memory" data-type="1" class="icon-btn editBtn">
                                                        <i class="la la-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">2</td>
                                                <td data-label="Name">Size as Text</td>
                                                <td data-label="Name for User">Size</td>
                                                <td data-label="Type"> Text </td>
                                                <td data-label="Action">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="Edit" data-id="4" data-name="Size as Text" data-name_for_user="Size" data-type="1" class="icon-btn editBtn">
                                                        <i class="la la-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">3</td>
                                                <td data-label="Name">Color as Image</td>
                                                <td data-label="Name for User">Color</td>
                                                <td data-label="Type"> Color </td>
                                                <td data-label="Action">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="Edit" data-id="3" data-name="Color as Image" data-name_for_user="Color" data-type="2" class="icon-btn editBtn">
                                                        <i class="la la-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">4</td>
                                                <td data-label="Name">Color as Color</td>
                                                <td data-label="Name for User">Color</td>
                                                <td data-label="Type"> Color </td>
                                                <td data-label="Action">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="Edit" data-id="2" data-name="Color as Color" data-name_for_user="Color" data-type="2" class="icon-btn editBtn">
                                                        <i class="la la-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="S.N.">5</td>
                                                <td data-label="Name">Camera</td>
                                                <td data-label="Name for User">Camera</td>
                                                <td data-label="Type"> Text </td>
                                                <td data-label="Action">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="Edit" data-id="1" data-name="Camera" data-name_for_user="Camera" data-type="1" class="icon-btn editBtn">
                                                        <i class="la la-pencil"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-end mb-0">




                                            <li>
                                            </li>
                                        </ul>
                                    </nav>


                                </nav>
                            </div>

                        </div>
                    </div>
                </div>


                <div id="addModal" class="modal fade">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Attribute Type</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="https://script.viserlab.com/visermart/admin/attribute/create/0" method="POST">
                                    <input type="hidden" name="_token" value="3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Name For Admin" value="" name="name" required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Name for User</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Name For User" value="" name="name_for_user" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Type</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="select2-basic" name="type" required>
                                                <option value="" disabled selected>Click to Pick</option>
                                                <option value="1">Text</option>
                                                <option value="2">Color</option>
                                                <option value="3">Image</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn--success mr-2">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="editModal" class="modal fade">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Attribute Type</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" id="editForm">
                                    <input type="hidden" name="_token" value="3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Name For Admin" name="name" required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Name for User</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Name For User" name="name_for_user" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="font-weight-bold">Type</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="select2-basic" name="type" required>
                                                <option value="" disabled selected>Click to Pick</option>
                                                <option value="1">Text</option>
                                                <option value="2">Color</option>
                                                <option value="3">Image</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn--success mr-2">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






   @include('Admin.script')

</body>

</html>