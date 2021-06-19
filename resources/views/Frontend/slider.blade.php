<div class="all-sections">
            <div class="banner-section oh rounded--5 mb-30">
                <div class="banner-slider owl-theme owl-carousel">


                    @foreach($all_slider as $item)

                    @if($item->status =='Active')
                    <a href="category/3/womens-fashion" class="d-block">
                        <div class="slide-item">

                            <img src="{{asset('images/'.$item->image)}}" alt="slider">
                        </div>
                    </a>
                    @endif

                    @endforeach

                </div>
                <div class="slide-progress"></div>
            </div>

            <div class="oh mb-30">
                <div class="related-slider owl-carousel owl-theme">

                    @foreach($all_subcategory as $item)

                    @if($item->slider=='Yes')
                    <a href="/product/subcategory/{{$item->subcategory_name}}" class="d-block related-slide-item text-center">
                        <div class="mb-10 oh rounded">
                            <img src="{{asset('images/'.$item->image)}}" class="w-100" width='50px' height='50px' alt="products-hot">
                        </div>
                        <span class="line-limitation-1">{{$item->subcategory_name}}</span>
                    </a>
                    @endif

                    @endforeach

                </div>
            </div>


            <div class="oh">
                <div class="product-wrapper">

                    @foreach($all_product as $item)

                    @if($item->advertise_option=='Yes')
                    <div class="product-item">
                        <div class="product-inner wish-buttons-in">
                            <span class="badge badge--lg abs--badge badge-danger">{{$item->product_title}}</span>

                            <a href="/product/category/{{$item->product_category}}" class="w-100">
                                <img src="{{asset('images/'.$item->image)}}" class="image-thumbnail" width='300px' height="300px" alt="products">
                            </a>

                            <div class="product-content">
                                <div class="cont-top">
                                    <h6 class="title">Explore Your Comfort</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @endforeach

                </div>
            </div>
        </div>