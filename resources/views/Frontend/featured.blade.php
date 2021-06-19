<div class="featured-section padding-bottom-half padding-top-half oh">
    <div class="container">
        <div class="section-header-2">
            <h3 class="title">Our Featured Products</h3>
            <a href="/product" class="custom-button theme btn-sm">View All Products</a>
        </div>
        <div class="m--15">
            <div class="product-slider-2 owl-carousel owl-theme">


                @foreach($all_product as $item)

                @if($item->featured=='Yes')
                <div class="product-item-2">
                    <div class="product-item-2-inner wish-buttons-in">
                        <ul class="wish-react">
                            <li>
                                <a href="/product/wishlist/{{$item->id}}" title="Add To Wishlist" class="add-to-wish-list  "><i class="lar la-heart"></i></a>

                            </li>
                            <li>

                                <a href="/product/compare/{{$item->id}}" title=" Compare" class="add-to-compare " data-id="23"><i class="las la-sync-alt"></i></a>
                            </li>
                        </ul>
                        <div class="product-thumb">
                            <a href="/product/details/{{$item->product_title}}">
                                <img src="{{asset('images/'.$item->image)}}" width="400px" height="350px" alt="flash">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-before-content">
                                <h6 class="title">
                                    <a href="https://script.viserlab.com/visermart/product/detail/23/gucci-sandals-for-woman">Gucci Sandals for woman</a>
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
                                <button data-product="23" class="cmn-btn btn-sm " data-toggle="modal" data-target="#f{{$item->id}}">
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