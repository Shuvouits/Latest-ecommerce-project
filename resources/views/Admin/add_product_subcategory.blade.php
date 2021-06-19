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
        @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">



                <div class="row ">


                    <div class="col-md-8" style="margin-bottom: 30px;">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add SubCategory</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/add_subcategory" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="category" style="font-size: 13px;"><strong>Category</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2" name='category_id' id='category' style="width: 100%;" required>
                                                <option selected='selected' disabled='disabled' value="">--Select Category--</option>
                                                @foreach($all_category as $item)
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="cat" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>SubCategory Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="subcategory_name" class="form-control" id="cat" placeholder="Category Name" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="category_icon" style="font-size: 13px;"><strong>Choose Icon</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2" name='subcategory_icon' id='category_icon' style="width: 100%;" required>
                                                <option selected='selected' disabled='disabled' value="">--Select Icon--</option>
                                                @foreach($all_icon as $item)
                                                
                                                
                                                <option>{{$item->icon_name}}</option>
                                                

                                                @endforeach
                                               

                                            </select>

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


                    <div class="col-lg-12">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-header">
                                <h3 class="card-title">All SubCategory</h3>
                            </div>

                            <div class="card-body">
                                <table id="shuvo" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Subcategory Name</th>
                                            <th>Subcategory Icon</th>
                                            <th>Subcategory Image</th>
                                            <th>Slider Option</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($all_subcategory as $item)


                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->category_name}}</td>
                                            <td class="">
                                                <span>{{$item->subcategory_name}}</span>
                                            </td>
                                            <td><i class="{{$item->icon}}" style="font-size: 30px;"></i></td>
                                            <td><img src="{{asset('images/'.$item->image)}}" class="img-thumbnail" height="50px" width="50px"></td>
                                            <td>
                                                @if($item->slider=='Yes')
                                                <a href="/admin/product/slider/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                                                @else
                                                <a href="/admin/product/slider/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                                                @endif
                                            </td>
                                            <td>
                                               <a href='/admin/product/edit_subcategory/status/{{$item->id}}' class="brn btn-primary btn-sm">Active</a>
                                            </td>

                                            <td>

                                                <span style="margin-right:10px"><a href="/admin/product/edit_subcategory/{{$item->id}}" class="highlight-btn icon-btn btn--success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                                                <span style="margin-left:10px"><a href="/admin/product/delete_subcategory/{{$item->id}}" class="highlight-btn icon-btn btn--danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></span>



                                            </td>
                                        </tr>


                                        @endforeach





                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
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

    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>




</body>

</html>