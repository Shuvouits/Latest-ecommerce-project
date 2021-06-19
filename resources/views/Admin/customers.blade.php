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
                        <h6 class="page-title">All Customers</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-xl-4 col-lg-6 mb-3">
                                        <form action="https://script.viserlab.com/visermart/admin/customers/all/search" method="GET" class="form-inline float-sm-right bg--white">
                                            <div class="input-group has_append">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive--md  table-responsive">
                                    <table id="shuvo" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($all_people as $item)
                                            <tr>
                                                <td>
                                                    @if($item->image !='')
                                                    <img src="{{asset('images/'.$item->image)}}" style="width:60px;height:60px" class="img-thumbnail">
                                                    @else
                                                    <img src="{{asset('images/avater.png')}}" style="width:60px;height:60px" class="img-thumbnail">
                                                    @endif
                                                </td>
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->mobile}}</td>
                                                <td>

                                                    <a href="/admin/customer/detail/{{$item->username}}" class="icon-btn" data-toggle="tooltip" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>

                                                </td>
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