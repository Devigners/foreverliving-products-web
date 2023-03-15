@foreach ($products as $item)
    <div class="axil-product-list search-product-item">
        <div class="thumbnail"> <a> <img
                    style=" width: 120px; height: 120px; object-fit: cover; object-position: center; "
                    src="{{ $item->image_link }}">
            </a> </div>
        <div class="product-content">
            <h6 class="product-title"> <a href="/greatbritain/product/Skin-Care/Hydrating-Serum">{{ $item->title }}</a>
            </h6>
            <div class="product-price-variant"> <span class="price current-price">{{ $item->price }}</span> </div>
            <div class="product-cart">
                <ul class="cart-action">
                    <li class="select-option"> <a href="{{ $item->affiliate_link }}}}" target="_blank">Buy Now</a> </li>
                    <li class="select-option"> <a
                            href="{{ route('product', ['country' => $country, 'category' => str_replace(' ', '-', $item->singlecategory), 'name' => $item->slug]) }}"
                            class="btn-default">See Details</a> </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach
