<div class="col-xl-3">
    <div class="dashboard-menu">
        <div class="user">
            <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
            <div class="thumb">
                <a href="/user/profile-setting">
                    @if($image=='')
                    <img src="https://script.viserlab.com/visermart/assets/images/avatar.png" alt="user">
                    @else 
                    <img src="{{asset('images/'.$image)}}" alt="user">
                    @endif 
                    
                </a>
            </div>
            <div class="content">
                <h6 class="title"><a href="shuvo bhowmik" class="cl-white">shuvo bhowmik</a></h6>
            </div>
        </div>
        <ul>
            <li>
                <a href="/user/dashboard" class="{{$dashboard}}"> <i class="las la-home"></i>Dashboard</a>
            </li>
            <li>
                <a href="/user/profile-setting" class="{{$profile}}"><i class="las la-user-alt"></i>Profile</a>
            </li>

            <li>
                <a href="/user/payment/history" class="{{$payment}}"><i class="las la-money-bill-wave"></i>Payment Log</a>
            </li>

           

            <li>
                <a href="/user/product/review" class="{{$review}}"><i class="la la-star"></i> Review Products</a>
            </li>

           

            <li>
                <a href="/user/logout"><i class="la la-sign-out"></i>Sign Out</a>
            </li>
        </ul>
    </div>
</div>