<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

       


        <!---sidebar start-->
        @include('Admin.sidebar')
        <!-- sidebar end -->

        
        <!-- navbar-wrapper start -->
        @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Dashboard</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>


                <div class="row mb-none-30">
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--dark b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--dark"><i class="las la-cart-arrow-down"></i></div>
                            <div class="widget__content">
                                <p class="text-uppercase text-muted">All Order</p>

                                <h1 class="text--dark font-weight-bold">
                                    {{$all_order_count}}
                                </h1>
                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm btn--dark" href="#">View All </a>
                                </p>
                            </div>
                        </div><!-- widget end -->
                    </div>

                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--teal b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--teal">
                                <i class="las la-shopping-cart"></i>
                            </div>
                            <div class="widget__content">
                                <p class="text-uppercase text-muted">Total Sale</p>

                                <h1 class="text--teal font-weight-bold">
                                    {{$sum}} TK.
                                </h1>
                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm bg--teal text-white" href="#">View All </a>
                                </p>
                            </div>
                        </div><!-- widget end -->
                    </div>

                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--light-blue b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--light-blue">
                                <i class="las la-tshirt"></i>
                            </div>
                            <div class="widget__content">
                                <p class="text-uppercase text-muted">Total Product</p>
                                <h1 class="text--light-blue font-weight-bold">
                                    {{$all_product_count}}
                                </h1>
                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm bg--light-blue text-white" href="#">View All </a>
                                </p>
                            </div>
                        </div><!-- widget end -->
                    </div>

                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--cyan b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--cyan">
                                <i class="las la-users"></i>
                            </div>

                            <div class="widget__content">
                                <p class="text-uppercase text-muted">Total Customer</p>
                                <h1 class="text--cyan font-weight-bold">{{$all_people_count}}</h1>

                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm bg--cyan text--white" href="#">
                                        View All </a>
                                </p>
                            </div>
                        </div><!-- widget-two end -->
                    </div>


                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--success b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--success">
                                <i class="las la-user-check"></i>
                            </div>
                            <div class="widget__content">
                                <p class="text-uppercase text-muted">Active Customers</p>
                                <h1 class="text--success font-weight-bold">
                                    59
                                </h1>
                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm btn--success" href="#">View All </a>
                                </p>
                            </div>
                        </div><!-- widget end -->
                    </div>

                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="widget bb--3 border--deep-purple b-radius--10 bg--white p-4 box--shadow2 has--link">
                            <div class="widget__icon b-radius--rounded bg--deep-purple">
                                <i class="las la-thumbs-up"></i>
                            </div>
                            <div class="widget__content">
                                <p class="text-uppercase text-muted">Total Subscriber</p>
                                <h1 class="text--deep-purple font-weight-bold">
                                    4
                                </h1>
                                <p class="mt-10 text-right">
                                    <a class="btn btn-sm bg--deep-purple text--white" href="#">View All </a>
                                </p>
                            </div>
                        </div><!-- widget end -->
                    </div>


                    <div class="col-xl-4 mb-30">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="icon-7 overlay-icon text text--11"></i>
                            <div class="widget-two__icon b-radius--5 bg--11">
                                <i class="las la-money-bill"></i>
                            </div>
                            <div class="widget-two__content">
                                <h2>{{$sum1}} TK.</h2>
                                <p>Sale Amount In Last 7 Days</p>
                            </div>
                        </div><!-- widget-two end -->
                    </div>

                    <div class="col-xl-4 mb-30">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="icon-15 overlay-icon text text--dark"></i>
                            <div class="widget-two__icon b-radius--5 bg--15">
                                <i class="las la-money-bill"></i>
                            </div>
                            <div class="widget-two__content">
                                <h2>{{$sum1}} TK.</h2>
                                <p>Sale Amount In Last 15 Days</p>
                            </div>
                        </div><!-- widget-two end -->
                    </div>

                    <div class="col-xl-4 mb-30">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="icon-30 overlay-icon text text--danger"></i>
                            <div class="widget-two__icon b-radius--5 bg--5">
                                <i class="las la-money-bill"></i>
                            </div>
                            <div class="widget-two__content">
                                <h2>{{$sum3}} TK.</h2>
                                <p>Sale Amount In Last 30 Days</p>
                            </div>
                        </div><!-- widget-two end -->
                    </div>

                </div><!-- row end-->

                <div class="row mt-50 mb-none-30">
                   
                    <div class="col-xl-6 col-lg-12 mb-30">
                        <div class="card min-height-500">
                            <div class="card-body">
                                <h5 class="card-title">Top Selling Products</h5>

                                @foreach($top_products as $item)

                                <div class="d-flex flex-wrap single-product mt-30">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="View As Customer" class="col-md-2 text-center"><img src="{{asset('images/'.$item->image)}}" alt="image"></a>

                                    <div class="col-md-10 mt-md-0 mt-3">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Edit" class="text--blue font-weight-bold d-inline-block mb-2">{{$item->product_title}}</a>
                                        <p class="float-right">{{$item->sell}} sells</p>
                                        <p>{{$item->product_description}}....</p>
                                        <p class="font-weight-bold">

                                            <del>{{$item->regular_price}}</del>
                                            <span class="ml-2">{{$item->regular_price - $item->discount_price}}</span>
                                        </p>
                                    </div>
                                </div><!-- media end-->
                                @endforeach

                               

                               

                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Latest Orders</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light style--two">
                                        <thead>
                                            <tr>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Amount</th>
                                                
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($top_order as $item)

                                            @foreach($all_people as $data)

                                            @if($item->email == $data->email)
                                            <tr>
                                                <td data-label="Customer">
                                                    <div class="user">
                                                        <div class="thumb">
                                                            <a href="https://script.viserlab.com/visermart/assets/images/avatar.png" class="image-popup">
                                                               
                                                                @if($data->image !='')
                                                                <img src="{{asset('images/'.$data->image)}}" alt="image">
                                                                @else
                                                                <img src="{{asset('images/avater.png')}}" alt="image">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <span class="name">{{$item->username}}</span>
                                                    </div>
                                                </td>
                                                <td data-label="Order Id">{{$item->transaction_id}}</td>
                                                <td data-label="Amount">{{$item->amount}}</td>
                                                
                                                <td>
                                                    <a href="#" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                        <i class="las la-desktop text--shadow"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endif 

                                            @endforeach 

                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- row end -->


               

                



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>



    @include('Admin/script')
</body>

</html>