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
                                <h3 class="card-title">Edit Slider</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/edit_slider" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="slider" style="font-size: 13px;"><strong>Slider Title</strong></label>
                                        <div class="col-sm-9">

                                            <input type="text" class="form-control" name="slider_title" value='{{$slider_title}}' placeholder="Enter the slider title" required>

                                        </div>

                                    </div>

                                    <input type="hidden" name="slider_id" value='{{$slider_id}}'>

                                   

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Preview:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="btn btn-primary form-control" name='image' onchange="readURL(this);">
                                            
                                            <img src="{{asset('images/'.$slider_image)}}" id="blah" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">

                                        </div>

                                    </div>












                                    <button type="submit" class="btn btn-block btn--success mr-2">Save</button>

                                </form>
                            </div>
                            <!-- /.card-body -->
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