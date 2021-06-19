<div class="padding-bottom-half padding-top-half oh">
    <div class="container">
        <ul class="nav nav-tabs">
            <li>
                <a href="#cat-1" class=" active " data-toggle="tab">Men&#039;s Fashion</a>
            </li>
            <li>
                <a href="#cat-3" class="" data-toggle="tab">Women&#039;s Fashion</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane   show active fade " id="cat-1">
                <div class="m--15">
                    <div class="product-slider-2 owl-carousel owl-theme">

                        @foreach($all_product as $item)

                        @if($item->product_category =="Mens Fashion" && $item->discount_option !='Yes')
                        <div class="product-item-2">
                            <div class="product-item-2-inner wish-buttons-in">
                                <ul class="wish-react">
                                    <li>
                                        <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="20"><i class="lar la-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="/product/compare/{{$item->id}}" title="Compare " class="add-to-compare" data-id="20"><i class="las la-sync-alt"></i></a>
                                    </li>
                                </ul>
                                <div class="product-thumb">
                                    <a href="/product/details/{{$item->product_title}}">
                                        <img src="{{asset('images/'.$item->image)}}" alt="flash" width="400px" height="350px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-before-content">
                                        <h6 class="title">
                                            <a href="https://script.viserlab.com/visermart/product/detail/20/regulator-automatic-blue-slate">Regulator Automatic Blue Slate</a>
                                        </h6>
                                        <div class="ratings-area justify-content-between">
                                            <div class="ratings">
                                                @if($item->review_score ==1)
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==2)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==3)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==4)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif

                                            </div>

                                            @if($item->review_count == 0)
                                            <span class="ml-2 mr-auto">(0)</span>
                                            @else
                                            <span class="ml-2 mr-auto">({{$item->review_count}})</span>
                                            @endif
                                            <div class="price">
                                                {{$item->regular_price}} TK.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-after-content">
                                        <button data-product="20" class="cmn-btn btn-sm" data-toggle="modal" data-target="#m{{$item->id}}">
                                            View </button>
                                        <div class="price">
                                            {{$item->regular_price}} TK.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach


                    </div>
                </div>
            </div>

            <div class="tab-pane  " id="cat-3">
                <div class="m--15">
                    <div class="product-slider-2 owl-carousel owl-theme">



                        @foreach($all_product as $item)

                        @if($item->discount_option !='Yes' && $item->product_category=="Womens Fashion")
                        <div class="product-item-2">
                            <div class="product-item-2-inner wish-buttons-in">
                                <ul class="wish-react">
                                    <li>
                                        <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list " data-id="36"><i class="lar la-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="/product/compare/{{$item->id}}" title="Compare " class="add-to-compare" data-id="36"><i class="las la-sync-alt"></i></a>
                                    </li>
                                </ul>
                                <div class="product-thumb">
                                    <a href="/product/details/{{$item->product_title}}">
                                        <img src="{{asset('images/'.$item->image)}}" alt="flash" width="400px" height="350px">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-before-content">
                                        <h6 class="title">
                                            <a href="https://script.viserlab.com/visermart/product/detail/36/the-only-one-2-perfume-by-dolce-gabbana-edp-100ml-for-women">The Only One 2 Perfume by Dolce &amp; Gabbana EDP 100ml for women</a>
                                        </h6>
                                        <div class="ratings-area justify-content-between">
                                            <div class="ratings">
                                                @if($item->review_score ==1)
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==2)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==3)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif

                                                @if($item->review_score ==4)
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                <i class="lar la-star"></i>
                                                @endif



                                            </div>

                                            @if($item->review_count == 0)
                                            <span class="ml-2 mr-auto">(0)</span>
                                            @else
                                            <span class="ml-2 mr-auto">({{$item->review_count}})</span>
                                            @endif


                                            <div class="price">
                                                {{$item->regular_price}} TK.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-after-content">
                                        <button data-product="36" class="cmn-btn btn-sm" data-toggle="modal" data-target="#w{{$item->id}}">
                                            View </button>
                                        <div class="price">
                                            {{$item->regular_price}} TK.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>