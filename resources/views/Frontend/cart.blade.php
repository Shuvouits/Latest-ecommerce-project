<div id="body-overlay" class="body-overlay"></div>
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content">
        <a href="https://script.viserlab.com/visermart" class="logo">
            <img src="https://script.viserlab.com/visermart/assets/images/logoIcon/logo_2.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="las la-times"></i></span>
    </div>
    <div class="bottom-content">
        <div class="cart-products cart--products">





            <h4 class="title">Your Cart</h4>

            <?php 

            $session_cart = session()->get('cart');
            
            ?>

            @if($session_cart !='')

            @foreach($all_cart as $item)
            <div class="single-product-item">
                <div class="thumb">
                    <img src="{{asset('images/'.$item->product_image)}}" alt="shop">
                </div>
                <div class="content">
                    <h4 class="title"><a class="cl-white" href="/product/details/{{$item->product_title}}">{{$item->product_title}}</a></h4>
                    <div class="price">
                        <span class="pprice">
                            TK. {{$item->product_price - $item->discount_price}} x {{$item->product_quantity}}
                        </span>
                    </div>
                    <div class="text-white">
                        Color : Red<br> </div>

                    <a href="/product/cart/remove/{{$item->id}}" class="remove-cart remove-item-button" data-id="800" data-pid="19"><i class="la la-times"></i></a>
                </div>
            </div>

            @endforeach

            @endif

            

            @if($session_cart !='')
            
            <div class="btn-wrapper text-center">
                <a href="/product/all_cart" class="custom-button btn-block"> View Cart </a>
            </div>

            <div class="d-flex justify-content-between mt-3 text-white">
                <span class="text-white"> Subtotal </span>
                <span class="text-white">TK.<?php
                                            $sum = session()->get('sum');
                                            echo $sum;
                                            ?>
                </span>

            </div>

            @endif




        </div>
    </div>
</div>