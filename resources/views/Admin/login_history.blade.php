<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!--sidebar start-->
        @include('Admin.sidebar')
        <!-- sidebar end -->


        <!-- navbar-wrapper start -->
         @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Customer Login History</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                        <form action="https://script.viserlab.com/visermart/admin/customers/login/history" method="GET" class="form-inline float-sm-right bg--white">
                            <div class="input-group has_append">
                                <input type="text" name="search" class="form-control" placeholder="Search..." value="">
                                <div class="input-group-append">
                                    <button class="btn btn--primary" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card b-radius--10 ">
                            <div class="card-body p-0">

                                <div class="table-responsive--sm table-responsive">
                                    <table id="shuvo" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Username</th>
                                                <th>IP</th>
                                                
                                                <th>Browser</th>
                                                <th>OS</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>



                                            @foreach($login_history_data as $item)
                                            <tr>
                                               <td>{{$item->created_at}}</td>
                                               <td>{{$item->username}}</td>
                                               <td>{{$item->ip}}</td>
                                               
                                               <td>{{$item->browser}}</td>
                                               <td>{{$item->os}}</td>
                                            </tr>
                                            @endforeach
                                            








                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            
                        </div><!-- card end -->
                    </div>


                </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






    @include('Admin.script')



</body>

</html>