<!---summer modal-->

@foreach($all_product as $item)

@if($item->product_season=='Summer')

<div class="modal fade" id="modal{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                @if($item->image1 !='')
                                <li data-target="#demo" data-slide-to="1"></li>
                                @endif

                                @if($item->image2 !='')
                                <li data-target="#demo" data-slide-to="2"></li>
                                @endif

                                @if($item->image3 !='')
                                <li data-target="#demo" data-slide-to="3"></li>
                                @endif

                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                @if($item->image !='')
                                <div class="carousel-item active">
                                    <img src="{{asset('images/'.$item->image)}}" alt="Los Angeles" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image1 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image1)}}" alt="Chicago" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image2 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image2)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image3 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image3)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="product-details-content product-details">
                            <h4 class="title mt-3">{{$item->product_title}}</h4>
                            <div class="ratings-area justify-content-between">

                                <div class="ratings">
                                    <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                </div>
                                <span class="ml-2 mr-auto">(1)</span>

                            </div>

                            <div class="badge badge--success stock-status">
                                In Stock (<span class="stock-qty">{{$item->stock_quantity}}</span>)
                            </div>

                            <div class="price">
                                TK.<span class="special_price">{{$item->regular_price - $item->discount_price}}</span>
                                <del>TK.</del><del class="price-data">{{$item->regular_price}}</del>
                            </div>


                            <p> {{$item->product_description}} </p>

                            <div class="cart-and-coupon mt-3">

                                <div class="attr-data">
                                </div>


                                <form method="post" action="/product/cart">

                                    {{@csrf_field()}}
                                    <input type="hidden" name="product_id" value="{{$item->id}}">

                                    <div class="cart-plus-minus quantity">
                                        <div class="cart-decrease qtybutton dec">
                                            <i class="las la-minus"></i>
                                        </div>

                                        <input type="number" name="product_quantity" step="1" min="1" value="1" class="integer-validation">
                                        <div class="cart-increase qtybutton inc">
                                            <i class="las la-plus"></i>
                                        </div>

                                        <span class="add-cart" style="margin-top: -1px;">
                                            <button type="submit" class="cmn-btn cart-add-btn" data-id="18">Add To Cart</button>
                                        </span>

                                    </div>



                                </form>



                            </div>

                        </div>

                        <p>
                            <b>
                                Categories:
                            </b>
                            <a href="/product/category/{{$item->product_category}}">{{$item->product_category}}</a>
                            /
                            @foreach($all_subcategory as $data)

                            @if($item->product_subcategory == $data->id)
                            <a href="/product/subcategory/{{$data->subcategory_name}}">{{$data->subcategory_name}}</a>
                            @endif

                            @endforeach

                        </p>

                        <p>
                            <b>Brand:</b> {{$item->product_brand}}
                        </p>

                        <p>
                            <b>SKU:</b> <span class="product-sku">111VM031</span>
                        </p>


                        <p class="product-details-wishlist">
                            <b>Add To Wishlist: </b>
                            <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="18"><span class="wish-icon"></span></a>
                        </p>

                        <div class="add-cart">
                            <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cmn-btn">View More</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

@endif

@endforeach

<!---End Summer Modal-->


<!-- Featured modal start--->

@foreach($all_product as $item)

@if($item->featured=='Yes')

<div class="modal fade" id="f{{$item->id}}">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                @if($item->image1 !='')
                                <li data-target="#demo" data-slide-to="1"></li>
                                @endif

                                @if($item->image2 !='')
                                <li data-target="#demo" data-slide-to="2"></li>
                                @endif

                                @if($item->image3 !='')
                                <li data-target="#demo" data-slide-to="3"></li>
                                @endif

                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                @if($item->image !='')
                                <div class="carousel-item active">
                                    <img src="{{asset('images/'.$item->image)}}" alt="Los Angeles" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image1 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image1)}}" alt="Chicago" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image2 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image2)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image3 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image3)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="product-details-content product-details">
                            <h4 class="title mt-3">{{$item->product_title}}</h4>
                            <div class="ratings-area justify-content-between">

                                <div class="ratings">
                                    <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                </div>
                                <span class="ml-2 mr-auto">(1)</span>

                            </div>

                            <div class="badge badge--success stock-status">
                                In Stock (<span class="stock-qty">{{$item->stock_quantity}}</span>)
                            </div>

                            <div class="price">
                                TK.<span class="special_price">{{$item->regular_price - $item->discount_price}}</span>
                                <del>TK.</del><del class="price-data">{{$item->regular_price}}</del>
                            </div>


                            <p> {{$item->product_description}} </p>

                            <div class="cart-and-coupon mt-3">

                                <div class="attr-data">
                                </div>


                                <form method="post" action="/product/cart">

                                    {{@csrf_field()}}
                                    <input type="hidden" name="product_id" value="{{$item->id}}">

                                    <div class="cart-plus-minus quantity">
                                        <div class="cart-decrease qtybutton dec">
                                            <i class="las la-minus"></i>
                                        </div>

                                        <input type="number" name="product_quantity" step="1" min="1" value="1" class="integer-validation">
                                        <div class="cart-increase qtybutton inc">
                                            <i class="las la-plus"></i>
                                        </div>

                                        <span class="add-cart" style="margin-top: -1px;">
                                            <button type="submit" class="cmn-btn cart-add-btn" data-id="18">Add To Cart</button>
                                        </span>

                                    </div>



                                </form>



                            </div>

                        </div>

                        <p>
                            <b>
                                Categories:
                            </b>
                            <a href="/product/category/{{$item->product_category}}">{{$item->product_category}}</a>
                            /
                            @foreach($all_subcategory as $data)

                            @if($item->product_subcategory == $data->id)
                            <a href="/product/subcategory/{{$data->subcategory_name}}">{{$data->subcategory_name}}</a>
                            @endif

                            @endforeach

                        </p>

                        <p>
                            <b>Brand:</b> {{$item->product_brand}}
                        </p>

                        <p>
                            <b>SKU:</b> <span class="product-sku">111VM031</span>
                        </p>


                        <p class="product-details-wishlist">
                            <b>Add To Wishlist: </b>
                            <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="18"><span class="wish-icon"></span></a>
                        </p>

                        <div class="add-cart">
                            <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cmn-btn">View More</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>

</div>

@endif

@endforeach

<!--modal End--->


<!-- Mens Fashion modal start--->

@foreach($all_product as $item)

@if($item->product_category=="Mens Fashion" && $item->discount_option !='Yes')

<div class="modal fade" id="m{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                @if($item->image1 !='')
                                <li data-target="#demo" data-slide-to="1"></li>
                                @endif

                                @if($item->image2 !='')
                                <li data-target="#demo" data-slide-to="2"></li>
                                @endif

                                @if($item->image3 !='')
                                <li data-target="#demo" data-slide-to="3"></li>
                                @endif

                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                @if($item->image !='')
                                <div class="carousel-item active">
                                    <img src="{{asset('images/'.$item->image)}}" alt="Los Angeles" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image1 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image1)}}" alt="Chicago" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image2 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image2)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image3 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image3)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="product-details-content product-details">
                            <h4 class="title mt-3">{{$item->product_title}}</h4>
                            <div class="ratings-area justify-content-between">

                                <div class="ratings">
                                    <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                </div>
                                <span class="ml-2 mr-auto">(1)</span>

                            </div>

                            <div class="badge badge--success stock-status">
                                In Stock (<span class="stock-qty">{{$item->stock_quantity}}</span>)
                            </div>

                            <div class="price">
                                TK.<span class="special_price">{{$item->regular_price - $item->discount_price}}</span>
                                <del>TK.</del><del class="price-data">{{$item->regular_price}}</del>
                            </div>


                            <p> {{$item->product_description}} </p>

                            <div class="cart-and-coupon mt-3">

                                <div class="attr-data">
                                </div>


                                <form method="post" action="/product/cart">

                                    {{@csrf_field()}}
                                    <input type="hidden" name="product_id" value="{{$item->id}}">

                                    <div class="cart-plus-minus quantity">
                                        <div class="cart-decrease qtybutton dec">
                                            <i class="las la-minus"></i>
                                        </div>

                                        <input type="number" name="product_quantity" step="1" min="1" value="1" class="integer-validation">
                                        <div class="cart-increase qtybutton inc">
                                            <i class="las la-plus"></i>
                                        </div>

                                        <span class="add-cart" style="margin-top: -1px;">
                                            <button type="submit" class="cmn-btn cart-add-btn" data-id="18">Add To Cart</button>
                                        </span>

                                    </div>



                                </form>



                            </div>

                        </div>

                        <p>
                            <b>
                                Categories:
                            </b>
                            <a href="/product/category/{{$item->product_category}}">{{$item->product_category}}</a>
                            /
                            @foreach($all_subcategory as $data)

                            @if($item->product_subcategory == $data->id)
                            <a href="/product/subcategory/{{$data->subcategory_name}}">{{$data->subcategory_name}}</a>
                            @endif
                            
                            @endforeach
                           
                        </p>
                        
                        <p>
                            <b>Brand:</b> {{$item->product_brand}}
                        </p>

                        <p>
                            <b>SKU:</b> <span class="product-sku">111VM031</span>
                        </p>


                        <p class="product-details-wishlist">
                            <b>Add To Wishlist: </b>
                            <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="18"><span class="wish-icon"></span></a>
                        </p>

                        <div class="add-cart">
                            <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cmn-btn">View More</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

@endif

@endforeach

<!--modal End--->


<!-- Womens Fashion modal start--->

@foreach($all_product as $item)

@if($item->product_category=="Womens Fashion" && $item->discount_option !='Yes')

<div class="modal fade" id="w{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                @if($item->image1 !='')
                                <li data-target="#demo" data-slide-to="1"></li>
                                @endif

                                @if($item->image2 !='')
                                <li data-target="#demo" data-slide-to="2"></li>
                                @endif

                                @if($item->image3 !='')
                                <li data-target="#demo" data-slide-to="3"></li>
                                @endif

                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                @if($item->image !='')
                                <div class="carousel-item active">
                                    <img src="{{asset('images/'.$item->image)}}" alt="Los Angeles" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image1 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image1)}}" alt="Chicago" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image2 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image2)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                                @if($item->image3 !='')
                                <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->image3)}}" alt="New York" width="500" height="500">
                                </div>
                                @endif

                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="product-details-content product-details">
                            <h4 class="title mt-3">{{$item->product_title}}</h4>
                            <div class="ratings-area justify-content-between">

                                <div class="ratings">
                                    <i class="la la-star"></i><i class="la la-star"></i><i class="la la-star"></i><i class="lar la-star"></i><i class="lar la-star"></i>
                                </div>
                                <span class="ml-2 mr-auto">(1)</span>

                            </div>

                            <div class="badge badge--success stock-status">
                                In Stock (<span class="stock-qty">{{$item->stock_quantity}}</span>)
                            </div>

                            <div class="price">
                                TK.<span class="special_price">{{$item->regular_price - $item->discount_price}}</span>
                                <del>TK.</del><del class="price-data">{{$item->regular_price}}</del>
                            </div>


                            <p> {{$item->product_description}} </p>

                            <div class="cart-and-coupon mt-3">

                                <div class="attr-data">
                                </div>


                                <form method="post" action="/product/cart">

                                    {{@csrf_field()}}
                                    <input type="hidden" name="product_id" value="{{$item->id}}">

                                    <div class="cart-plus-minus quantity">
                                        <div class="cart-decrease qtybutton dec">
                                            <i class="las la-minus"></i>
                                        </div>

                                        <input type="number" name="product_quantity" step="1" min="1" value="1" class="integer-validation">
                                        <div class="cart-increase qtybutton inc">
                                            <i class="las la-plus"></i>
                                        </div>

                                        <span class="add-cart" style="margin-top: -1px;">
                                            <button type="submit" class="cmn-btn cart-add-btn" data-id="18">Add To Cart</button>
                                        </span>

                                    </div>



                                </form>



                            </div>

                        </div>

                        <p>
                            <b>
                                Categories:
                            </b>
                            <a href="/product/category/{{$item->product_category}}">{{$item->product_category}}</a>
                            /
                            @foreach($all_subcategory as $data)

                            @if($item->product_subcategory == $data->id)
                            <a href="/product/subcategory/{{$data->subcategory_name}}">{{$data->subcategory_name}}</a>
                            @endif
                            
                            @endforeach
                           
                        </p>
                        
                        <p>
                            <b>Brand:</b> {{$item->product_brand}}
                        </p>

                        <p>
                            <b>SKU:</b> <span class="product-sku">111VM031</span>
                        </p>


                        <p class="product-details-wishlist">
                            <b>Add To Wishlist: </b>
                            <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="18"><span class="wish-icon"></span></a>
                        </p>

                        <div class="add-cart">
                            <a href="https://script.viserlab.com/visermart/product/detail/18/puma-pink-ladies-dresses" class="cmn-btn">View More</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

@endif

@endforeach

<!--modal End--->