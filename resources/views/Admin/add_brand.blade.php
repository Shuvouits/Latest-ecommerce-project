<!DOCTYPE html>
<html lang="en">

<head>

    @include('Admin.link')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">





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



                <div class="row justify-content-center">


                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Brand</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/add_brand" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <div class="form-group row">
                                        <label for="bn" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Brand Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="brand_name" class="form-control" id="bn" placeholder="Product Name" required>
                                        </div>
                                    </div>

                                  

                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Date:</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="date" class="form-control" id="datepicker" required>

                                        </div>

                                    </div>








                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Brand Logo:</strong></label>
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









            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>


    @include('Admin.script')

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>





</body>

</html>