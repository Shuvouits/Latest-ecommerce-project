<div class="flash-sell-section padding-bottom-half padding-top-half oh">
    <div class="container">
        <div class="section-header-2 left-style">
            <h3 class="title">Summer 2021</h3>
            <ul class="countdown" data-countdown="05/30/2021 00:00:00">
                <li>
                    <span class="countdown-title"><span class="days">00</span></span>
                    <p class="days_text">Days</p>
                </li>
                <li>
                    <span class="countdown-title"><span class="hours">00</span></span>
                    <p class="hours_text">Hours</p>
                </li>
                <li>
                    <span class="countdown-title"><span class="minutes">00</span></span>
                    <p class="minu_text">Minutes</p>
                </li>
                <li>
                    <span class="countdown-title"><span class="seconds">00</span></span>
                    <p class="seco_text">Seconds</p>
                </li>
            </ul>
        </div>

        <div class="m--15">

            <div class="product-slider-2 owl-carousel owl-theme">

                @foreach($all_product as $item)

                @if($item->product_season == 'Summer')
                <div class="product-item-2">
                    <div class="product-item-2-inner wish-buttons-in">
                        <ul class="wish-react">
                            <li>
                                <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list "><i class="lar la-heart"></i></a>
                            </li>
                            <li>
                                <a href="/product/compare/{{$item->id}}" title="Compare" class="add-to-compare " data-id="2"><i class="las la-sync-alt"></i></a>
                            </li>
                        </ul>
                        <div class="product-thumb">
                            <a href="/product/details/{{$item->product_title}}">
                                <img src="{{asset('images/'.$item->image)}}" width='400px' height='350px' alt="flash">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-before-content">
                                <h6 class="title">
                                    <a href="/product/details/{{$item->product_title}}">{{$item->product_title}}</a>
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
                                <button data-product="2" class="cmn-btn btn-sm" data-toggle="modal" data-target="#modal{{$item->id}}">
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