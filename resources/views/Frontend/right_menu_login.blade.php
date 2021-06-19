<?php

$session_username = session()->get('user_name');

?>

@if($session_username !='')

@include('Frontend.dashboard_right_menu')

@else 
<div class="dashboard-menu before-login-menu d-flex flex-wrap justify-content-center flex-column">
    <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
    <div class="login-wrapper py-5 px-4">
        <h4 class="subtitle cl-white">My Account</h4>
        <form method="POST" action="/cart/login_post" class="sign-in-form">
            {{@csrf_field()}}
            <div class="form-group">
                <label for="login-username">Username</label>
                <input type="text" class="form-control" name="username" id="login-username" value="" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="login-pass">Password</label>
                <input type="password" class="form-control" name="password" id="login-pass" placeholder="********">
            </div>


           

            <div class="form-group text-right pt-2">
                <button type="submit" class="login-button">Login</button>
            </div>

            <div class="pt-2 mb-0">
                <p class="create-accounts">
                    <a href="/cart/password/reset" class="mb-2">Forgot Password?</a>
                </p>
                <p class="create-accounts">
                    <span>Don't have an account? <a href="cart/register" class="link-color">Create An Account</a> </span>
                </p>
            </div>
        </form>
    </div>



</div>

@endif