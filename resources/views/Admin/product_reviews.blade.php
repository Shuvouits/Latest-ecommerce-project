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
                        <h6 class="page-title">All Product Reviews</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">

                        <a href="#" class="btn btn-sm btn--danger box--shadow1 text--small"><i class="la la-trash-alt"></i>Trashed</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                   
                                </div>
                                <div class="table-responsive--md table-responsive">
                                    <table id="shuvo" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>User</th>
                                                <th>Rating</th>
                                                <th>Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach($all_reviews as $item)
                                            <tr>
                                                <td>{{$item->product_id}}</td>
                                                @foreach($all_product as $data) 

                                                @if($item->product_id == $data->id)
                                                <td>{{$data->product_title}}</td>
                                                @endif 

                                                @endforeach
                                                <td>{{$item->user_name}}</td>
                                                <td>{{$item->review}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td data-label="Action">
                                                    <button type="button" class="icon-btn mr-1 view-btn" data-toggle="tooltip" title="" data-user="testuser1" data-rating="3" data-review="The color is not the same as the product but the fabric is very good" data-user_link="https://script.viserlab.com/visermart/admin/customer/detail/15" data-original-title="View">
                                                        <i class="la la-desktop"></i>
                                                    </button>

                                                    <button type="button" class="icon-btn btn--danger deleteBtn" data-toggle="tooltip" data-title="Delete" data-type="delete" data-id="2" data-original-title="" title="">
                                                        <i class="la la-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach








                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-end mb-0">




                                            <li>
                                            </li>
                                        </ul>
                                    </nav>


                                </nav>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize" id="deleteModalLabel">
                                        Removal Confirmation </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn--dark" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn--danger">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="viewModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Product Review</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="name">Reviewer</label>
                                    <a href="" id="user-detail">
                                        <sapn class="form-control" id="name"></sapn>
                                    </a>
                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <span class="form-control" id="rating"></span>
                                </div>
                                <div class="form-group">
                                    <label for="review">Review</label>
                                    <p class="form-control h-auto" id="review"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn--dark" data-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






    @include('Admin.script')


</body>

</html>