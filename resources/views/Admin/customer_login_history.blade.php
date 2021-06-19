<!DOCTYPE html>
<html lang="en">

<head>
   @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <!--Sidebar start---> 
         @include('Admin.sidebar')
        <!-- sidebar end -->
        <!-- navbar-wrapper start -->
         @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Customer Login History - {{$name}}</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card b-radius--10 ">
                            <div class="card-body p-0">

                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light style--two">
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

                                            @foreach($login_history as $item)

                                            @if($item->username == $name)
                                            <tr>
                                                <td data-label="Date">{{$item->created_at}}</td>
                                                <td data-label="Username"><a href="#"> {{$item->username}}</a></td>
                                                <td data-label="IP">
                                                    <a href="#">
                                                        {{$item->ip}}
                                                    </a>
                                                </td>
                                               
                                                <td data-label="Browser">{{$item->browser}}</td>
                                                <td data-label="OS">{{$item->os}}</td>
                                            </tr>
                                            @endif 

                                            @endforeach

                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">




                                        <li>
                                        </li>
                                    </ul>
                                </nav>


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