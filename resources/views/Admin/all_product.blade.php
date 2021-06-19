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

        <div class="row align-items-center mb-30 justify-content-between">
          <div class="col-lg-6 col-sm-6">
            <h6 class="page-title">All Categories</h6>
          </div>
          <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
            <a href='/admin/product/add_product' class="btn btn-sm btn--primary add-parent mb-xl-0 mb-2 box--shadow1 text--small"> <i class="las la-plus"></i> Add Product</a>
            <a href="/admin/product/add_subcategory" class="btn btn-sm btn--success add-chlid mb-xl-0 mb-2 box--shadow1 text--small" disabled> <i class="las la-plus"></i> Add Sub Category</a>

            <a href="#" class="btn btn-sm btn--danger mb-xl-0 mb-2 box--shadow1 text--small"><i class="las la-plus"></i>Add Child Category</a>
          </div>
        </div>

        <div class="row">



          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="shuvo" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Thumbnail</th>
                      <th>Product Name</th>
                      <th>Stock</th>
                      <th>Product Price</th>
                      
                      <th>Brand Name</th>
                      <th>Speciality</th>
                      <th>Product Discount</th>
                      <th>Advertise Option</th>
                      <th>Featured</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    

                    @foreach($all_product as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td><img src="{{asset('images/'.$item->image)}}" class="img-thumbnail" height='50px' width='50px'></td>
                      <td class="">
                         <span>{{$item->product_title}}</span>
                      </td>
                      <td>{{$item->stock_quantity}}</td>

                      <td>{{$item->regular_price}}</td>
                      

                      <td>
                         {{$item->product_brand}}
                      </td>

                      <td>
                         @if($item->speciality=='Yes')
                         <a href="/admin/product/speciality/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                         @else
                         <a href="/admin/product/speciality/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                         @endif
                         
                      </td>
                      <td>
                         @if($item->discount_option=='Yes')
                         <a href="/admin/product/discount/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                         @else
                         <a href="/admin/product/discount/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                         @endif
                      </td>
                      <td>
                         @if($item->advertise_option=='Yes')
                         <a href="/admin/product/advertise/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                         @else
                         <a href="/admin/product/advertise/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                         @endif
                      </td>
                      <td>
                         @if($item->featured=='Yes')
                             <a href="/admin/product/featured/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                         @else
                            <a href="/admin/product/featured/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                         @endif
                      </td>
                      <td>
                        <span style="margin-right:15px"><a href="/admin/product/edit/{{$item->id}}" class="highlight-btn icon-btn btn--success" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                        <span style="margin-left:15px"><a href="/admin/product/delete/{{$item->id}}" class="highlight-btn icon-btn btn--danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></span>
                        


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




       




      </div><!-- bodywrapper__inner end -->
    </div><!-- body-wrapper end -->
  </div>





  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>




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



</body>

</html>