<div class="cart-sidebar-area" id="wish-sidebar-area">
    <div class="top-content">
        <a href="https://script.viserlab.com/visermart" class="logo">
            <img src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo_2.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products wish-products">
            <h4 class="title">Your Wishlist</h4>

            <?php

            $wishlist = session()->get('wishlist');

            ?>

            @if($wishlist !='')

            @foreach($all_wishlist as $item)

            <div class="single-product-item">
                <div class="thumb">
                    <img src="{{asset('images/'.$item->product_image)}}" alt="shop">
                </div>
                <a href="/wishlist/product/delete/{{$item->id}}" class="remove-wishlist remove-item-button" data-page="0" data-id="427" data-pid="2"><i class="la la-times"></i></a>

                <div class="content">
                    <h4 class="title"><a class="cl-white" href="/product/details/{{$item->product_title}}">{{$item->product_title}}</a></h4>
                    <div class="price">
                        <span class="pprice">{{$item->product_price}}</span>
                        <del class="dprice">{{$item->discount_price}}</del>

                    </div>
                </div>
            </div>
            @endforeach

            @endif

        </div>
    </div>
</div>