<div class="call-to-section padding-top-half padding-bottom-half">
    <div class="container">
        <div class="row mb-30-none justify-content-center">

            @foreach($all_product as $item)

            @if($item->discount_option == 'Yes')

            <div class="col-md-4 col-lg-4 mb-30">
                <a href="/product/category/{{$item->product_category}}" class="d-block overlay-effects">
                    <img src="{{asset('images/'.$item->image)}}" height="250px" width="400px" class="w-100" alt="products-offer">
                </a>
            </div>


            @endif

            @endforeach

        </div>
    </div>
</div>