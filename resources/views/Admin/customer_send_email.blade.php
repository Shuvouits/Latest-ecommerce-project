<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.link')
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!---Sidebar start--->  
        @include('Admin.sidebar')
        <!-- sidebar end -->
        <!-- navbar-wrapper start -->
        @include('Admin.navbar')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="row align-items-center mb-30 justify-content-between">
                    <div class="col-lg-6 col-sm-6">
                        <h6 class="page-title">Send Email To: {{$username}}</h6>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3">
                    </div>
                </div>

                <div class="row mb-none-30">
                    <div class="col-xl-12">
                        <div class="card">
                            <form action="/admin/customer/send/email" method="POST">
                                {{@csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="font-weight-bold">Subject</label>
                                        </div>

                                        <input type="hidden" name="username" value="{{$username}}">
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" placeholder="Email subject" name="subject" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label class="font-weight-bold">Message</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="message" rows="10" class="form-control nicEdit" placeholder="Your message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 text-center">
                                            <button type="submit" class="btn btn-block btn--primary mr-2">Send Email</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>






    @include('Admin.script')


    <script>
        "use strict";

        function notify(status, message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
                $.each(message, function(i, val) {
                    iziToast[status]({
                        message: val,
                        position: "topRight"
                    });
                });
            }

        }

        function notifyOne(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

    <script src="https://script.viserlab.com/visermart/assets/admin/js/nicEdit.js"></script>


    <script type="text/javascript">
        (function($) {
            "use strict";
            bkLib.onDomLoaded(function() {
                $(".nicEdit").each(function(index) {
                    $(this).attr("id", "nicEditor" + index);
                    new nicEditor({
                        fullPanel: true
                    }).panelInstance('nicEditor' + index, {
                        hasPanel: true
                    });
                });
            });
        })(jQuery);
    </script>



</body>

</html>