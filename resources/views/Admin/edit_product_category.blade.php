<!DOCTYPE html>
<html lang="en">

<head>

    @include('Admin.link')

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
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
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/edit/category" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="category" style="font-size: 13px;"><strong>Category Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="category_name" value='{{$category_name}}'>
                                        </div>

                                    </div>

                                    <input type="hidden" name='target_category_id' value="{{$category_id}}">

                                    <div class="form-group row">
                                        <label for="mt" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Title</strong></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="meta_title" value="{{$meta_title}}">

                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <label for="md" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Description</strong></label>

                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" name="meta_description" id="md" required>{{$meta_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mk" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Keywords</strong></label>

                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" name="meta_keywords" id="mk">{{$meta_keywords}}</textarea>
                                        </div>
                                    </div>



                                   

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="category" style="font-size: 13px;"><strong>Category Icon</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2" name='category_icon' id='category' style="width: 100%;" required>
                                                <option selected='selected'>{{$category_icon}}</option>
                                                @foreach($all_icon as $item)
                                                
                                                @if($item->icon_name == $category_icon)
                                                @else
                                                <option>{{$item->icon_name}}</option>
                                                @endif

                                                @endforeach
                                               

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Preview:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="btn btn-primary form-control" name='image' onchange="readURL(this);">
                                            
                                            <img src="{{asset('images/'.$category_image)}}" id="blah" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">

                                        </div>

                                    </div>

                                   


                                   
                                    <button type="submit" class="btn btn-block btn--success mr-2">Save</button>

                                </form>
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