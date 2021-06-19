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
            <a href='/admin/product/add_category' class="btn btn-sm btn--primary add-parent mb-xl-0 mb-2 box--shadow1 text--small"> <i class="las la-plus"></i> Add Category</a>
            <a href="/admin/product/add_subcategory" class="btn btn-sm btn--success add-chlid mb-xl-0 mb-2 box--shadow1 text--small" disabled> <i class="las la-plus"></i> Add Sub Category</a>

            <a href="#" class="btn btn-sm btn--danger mb-xl-0 mb-2 box--shadow1 text--small"><i class="las la-plus"></i>Add Child Category</a>
          </div>
        </div>

        <div class="row">



          <div class="col-lg-12">

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="shuvo" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Icon</th>
                      <th>Category Name</th>
                      <th>Category Image</th>
                      <th>Meta Keywords</th>
                      
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($all_category as $item)

                    
                    <tr>
                      <td>{{$item->id}}</td>
                      <td><i class="{{$item->category_icon}}" style="font-size:30px"></i></td>
                      <td class="">
                         <span>{{$item->category_name}}</span>
                      </td>
                      <td><img src="{{asset('images/'.$item->image)}}" class="img-thumbnail" width="50px" height="50px"></td>

                      <td>{{$item->meta_keywords}}</td>
                      

                      <td>
                         <a href="/admin/product/status/{{$item->id}}" class="btn btn-primary btn-sm">Active</a>
                      </td>
                      <td>
                        <span style="margin-right:15px"><a href="/admin/product/categories/edit/{{$item->id}}" class="highlight-btn icon-btn btn--success" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                        <span style="margin-left:15px"><a href="/admin/product/categories/delete/{{$item->id}}" class="highlight-btn icon-btn btn--danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></span>
                        


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