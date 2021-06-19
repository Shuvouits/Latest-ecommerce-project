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
                                <h3 class="card-title">Add Slider</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/add_slider" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="slider" style="font-size: 13px;"><strong>Slider Title</strong></label>
                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="slider_title" placeholder="Enter the slider title" required>

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
                            <div class="card-body">
                                <table id="shuvo" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Slider Title</th>
                                            <th>Slider Image</th>
                                            <th>Entry Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach($all_slider as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->slider_title}}</td>
                                            <td class="">
                                                <img src="{{asset('images/'.$item->image)}}" class="img-thumbnail" width="50px" height="50px">
                                            </td>
                                            <td>{{$item->created_at}}</td>


                                            <td>
                                                @if($item->status=='Active')
                                                <a href='/admin/product/slider/status/{{$item->id}}' class="brn btn-primary btn-sm">Active</a>
                                                @else
                                                <a href='/admin/product/slider/status/{{$item->id}}' class="brn btn-danger btn-sm">DeActive</a>

                                                @endif

                                            </td>

                                            <td>

                                                <span style="margin-right:10px"><a href="/admin/product/slider/edit/{{$item->id}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                                                <span style="margin-left:10px"><a href="/admin/product/slider/delete/{{$item->id}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></span>



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