<!DOCTYPE html>
<html lang="en">

<head>

    @include('Admin.link')

</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!---sidebar start--->
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

               

                <div class="row justify-content-center">


                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/add_category" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label for="cat" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Category Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="category_name" class="form-control" id="cat" placeholder="Category Name" required>
                                        </div>
                                    </div>
                                   

                                   

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="category" style="font-size: 13px;"><strong>Category Icon</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2" name='icon' id='category' style="width: 100%;" required>
                                                <option selected='selected' disabled='disabled' value="">--Select Icon--</option>
                                                @foreach($all_icon as $item)
                                                
                                                <option>{{$item->icon_name}}</option>
                                                

                                                @endforeach
                                               

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="mt" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Title</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="meta_title" id="mt" placeholder="Meta Title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="md" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Description</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" name="meta_description" id="md" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mk" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Keywords</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" name="meta_keywords" id="md" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Preview:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="btn btn-primary form-control" name='image' onchange="readURL(this);" required>
                                            
                                            <img src="{{asset('images/avater.png')}}" id="blah" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">

                                        </div>

                                    </div>


                                  


                                    <button type="submit" class="btn btn-block btn--success mr-2">Save</button>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <div class="col-md-4"></div>
                </div>




                <div class="modal fade" id="deleteModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="" method="POST" id="deletePostForm">
                                <input type="hidden" name="_token" value="1x3qmvgn3RVsKrf9ngOjKHrPrbX80iUtKvx3QdYe">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"></div>
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>



</body>

</html>