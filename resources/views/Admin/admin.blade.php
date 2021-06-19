<!DOCTYPE html>
<html lang="en">

<head>
   @include('Admin.link')
</head>

<body>


    <div class="page-wrapper default-version">
        <div class="form-area bg_img" data-background="https://script.viserlab.com/visermart/assets/admin/images/1.jpg">
            <div class="form-wrapper">
                <h4 class="logo-text mb-15">Welcome to Viser</h4>
                <p>Admin Login to Viser Dashboard</p>
                <form action="/admin_login/post" method="POST" class="cmn-form mt-30">
                    {{@csrf_field()}}
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="text" name="username" class="form-control b-radius--capsule" id="username" value="admin" placeholder="Enter Your Username">
                        <i class="las la-user input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control b-radius--capsule" id="pass" value="admin" placeholder="Enter Your Password">
                        <i class="las la-lock input-icon"></i>
                    </div>

                   

                    <div class="form-group">
                        <button type="submit" class="submit-btn mt-25 b-radius--capsule">
                            Login <i class="las la-sign-in-alt"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div><!-- login-area end -->
    </div>



   @include('Admin.script')



</body>

</html>