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
            <h6 class="page-title">Product Brand</h6>
          </div>
          <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
            <a href='/admin/product/add_brand' class="btn btn-sm btn--success add-parent mb-xl-0 mb-2 box--shadow1 text--small"> <i class="las la-plus"></i> Add Brand</a>
           

           
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
                      <th>Logo</th>
                      <th>Name</th>
                      <th>products</th>
                      <th>Top Brand</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                

                    @foreach($all_brand as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td><img src="{{asset('images/'.$item->image)}}" height="50px" width="50px" class="img-thumbnail"></td>
                      <td class="">
                         {{$item->brand_name}}
                      </td>
                      <td>No Data</td>

                    
                      

                      <td>

                         @if($item->top=='Yes')
                         <a href="/admin/product/brands/top/{{$item->id}}" class="btn btn-primary btn-sm">Yes</a>
                         @else
                         <a href="/admin/product/brands/top/{{$item->id}}" class="btn btn-danger btn-sm">No</a>
                         @endif

                      </td>
                      <td>{{$item->date}}</td>
                      <td>
                        <span style="margin-right:15px"><a href="/admin/product/brands/edit/{{$item->id}}" class="highlight-btn icon-btn btn--success" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="fa fa-pencil" aria-hidden="true"></i></a></span>
                        <span style="margin-left:15px"><a href="/admin/product/brands/delete/{{$item->id}}" class="highlight-btn icon-btn btn--danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></span>
                        


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