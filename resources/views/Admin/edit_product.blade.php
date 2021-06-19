<!DOCTYPE html>
<html lang="en">

<head>

    @include('Admin.link')
    <link rel="stylesheet" href="{{asset('Admin/assets/admin/css/image-uploader.min.css')}}">
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
                                <h3 class="card-title">Edit Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="/admin/product/edit_product" enctype="multipart/form-data">
                                    {{@csrf_field()}}

                                    <input type="hidden" name='current_id' value='{{$current_product_id}}'>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Product Title</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product_title" class="form-control" id="product" value="{{$product_title}}" placeholder="Product Name" required>
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="product_category" style="font-size: 13px;"><strong>Product Category</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2bs4" name='product_category' id='product_category' style="width: 100%;" required>
                                                <option selected='selected' value="{{$category_id}}">{{$product_category}}</option>

                                                
                                                @foreach($all_category as $item)

                                               
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                                               

                                                @endforeach


                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="product_subcategory" style="font-size: 13px;"><strong>Product SubCategory</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2bs4" name='product_subcategory' id='product_subcategory' style="width: 100%;" required>
                                                <option selected='selected' disabled='disabled' value="{{$subcategory_id}}">{{$subcategory_name}}</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="rp" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Regular Price</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="regular_price" id="rp" value={{$regular_price}} placeholder="Product Price" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="dp" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Discount Price</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="discount_price" id="dp" value='{{$discount_price}}' placeholder="Discount Price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sq" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Stock Quantity</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="stock_quantity" id="sq" value="{{$stock_quantity}}" placeholder="Stock Quantity" required>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="pb" style="font-size: 13px;"><strong>Product Brand</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2bs4" name='product_brand' id='pb' style="width: 100%;" required>
                                                <option selected='selected'>{{$product_brand}}</option>

                                                @foreach($all_brand as $item)

                                                @if($item->brand_name == $product_brand)
                                                @else
                                                <option>{{$item->brand_name}}</option>
                                                @endif

                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="ps" style="font-size: 13px;"><strong>Product Seasons</strong></label>
                                        <div class="col-sm-9">

                                            <select class="form-control select2bs4" name='product_season' id='ps' style="width: 100%;">
                                                <option selected='selected'>{{$product_season}}</option>
                                                <option>Winter</option>
                                                <option>Summer</option>
                                                <option>Rainy</option>
                                                <option>Autumn</option>
                                                <option>Spring</option>

                                            </select>

                                        </div>

                                    </div>




                                    <div class="form-group row">
                                        <label for="pd" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Product Description</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" name="product_description" id="pd" required>{{$product_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mk" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Meta Keywords</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="meta_keywords" id="mk" required>{{$meta_keywords}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="vu" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Video Url</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="video_url" id="vu" value="{{$video_url}}">
                                        </div>
                                    </div>

                                      <!-- checkbox -->
                                      <div class="form-group clearfix">
                                        
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary2" name="specification" value="yes" data-toggle="collapse" data-target="#demo">
                                            <label for="checkboxPrimary2" style="font-size:13px">
                                                <strong>Edit Specification</strong>
                                            </label>
                                           
                                        </div>
                                        
                                    </div>


                                    <div class="form-group row collapse" id="demo">
                                        <label for="t1" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 1</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t1" name="title1"  value="{{$product_title1}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td1" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 1</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description1" id="td1">{{$product_description1}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t2" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 2</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t2" name="title2" value="{{$product_title2}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td2" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 2</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description2" id="td1">{{$product_description2}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t3" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 3</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t3" name="title3" value="{{$product_title3}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td3" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 3</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description3" id="td3">{{$product_description3}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t4" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 4</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t1" name="title4" value="{{$product_title4}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td4" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 4</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description4" id="td1">{{$product_description4}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t5" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 5</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t5" name="title5" value="{{$product_title5}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td5" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 5</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description5" id="td5" placeholder="Enter Description">{{$product_description5}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t6" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 6</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t6" name="title6" value="{{$product_title6}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td6" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 6</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description6" id="td6">{{$product_description6}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t7" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 7</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t7" name="title7" value="{{$product_title7}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td7" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 7</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description7" id="td7">{{$product_description7}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t8" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 8</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t8" name="title8" value="{{$product_title8}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td8" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 8</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description8" id="td8">{{$product_description8}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t9" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 9</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t1" name="title9" value="{{$product_title9}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td9" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 9</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description9" id="td9" placeholder="Enter Description">{{$product_description9}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="t10" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Title 10</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="t10" name="title10" value="{{$product_title10}}">
                                        </div>
                                    </div>

                                    <div class="form-group row collapse" id="demo">
                                        <label for="td10" class="col-sm-3 col-form-label" style="font-size: 13px;"><strong>Description 10</strong></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" name="description10" id="td1">{{$product_description10}}</textarea>
                                        </div>
                                    </div>






                                    <!--image-->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="pre" style="font-size: 13px;"><strong>Preview:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" id="pre" class="" name='image' onchange="readURL(this);">

                                            <img src="{{asset('images/'.$image)}}" id="blah" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">

                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="a1" style="font-size: 13px;"><strong>Additional Image1:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="" id="a1" name='image1' onchange="readURL1(this);">
                                            @if($image1=='')
                                            <img src="{{asset('images/avater.png')}}" id="blah1" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                            @else
                                            <img src="{{asset('images/'.$image1)}}" id="blah1" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                            @endif



                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="a2" style="font-size: 13px;"><strong>Additional Image2:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="btn" id="a2" name='image2' onchange="readURL2(this);">
                                            @if($image2=='')
                                            <img src="{{asset('images/avater.png')}}" id="blah2" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                            @else
                                            <img src="{{asset('images/'.$image2)}}" id="blah2" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                            @endif


                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="a3" style="font-size: 13px;"><strong>Additional Image3:</strong></label>
                                        <div class="col-sm-9">

                                            <input type="file" class="" id="a3" name='image3' onchange="readURL3(this);">

                                            @if($image3=='')
                                            <img src="{{asset('images/avater.png')}}" id="blah3" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                             @else
                                             <img src="{{asset('images/'.$image3)}}" id="blah2" class="img-thumbnail" style="margin-top:20px;width: 400px; height:350px">
                                            @endif
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

    <!---Ajax Script--->

    <script>
        $(document).ready(function() {
            $('#product_category').change(function() {
                var id = $(this).val();
                var token = $('input[name="_token"]').val();
                console.log(id);

                // console.log(token)

                $.ajax({

                    url: '/admin_ajax_product_category',
                    method: 'post',
                    dataType: "json",
                    data: {
                        id: id,
                        _token: token
                    },
                    success: function(result) {

                        $('#product_subcategory').html(result);

                    }
                })

            })
        })
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

    <!--Additional 1-->
    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah1')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!--Additional 2-->
    <script>
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah2')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!--Additional 3-->
    <script>
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah3')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>












    <script src="{{asset('Admin/assets/admin/js/image-uploader.min.js')}}"></script>


















</body>

</html>