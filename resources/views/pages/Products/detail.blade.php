@extends('layouts.app')
@section('content')
    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
            <div class="single-product-thumb mb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail-wrap zoom-gallery">
                                        <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                            <div class="thumbnail">
                                                <img src="{{ $products->image_link }}" alt="Product Images" />
                                            </div>

                                            <div class="thumbnail">
                                                <iframe width="100%" height="612px" src=""
                                                    title="Demo Background Sample Video" frameborder="0"
                                                    class="vimeo-iframe"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb-3 small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="{{ $products->image_link }}" alt="thumb image" />
                                        </div>
                                        <!-- if -->
                                        {{-- <div class="small-thumb-img video-thumbnail">
                                            <img src="" data-vimeo-href="" alt="thumb image" />
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h5 class="item-no">
                                        {{ $products->sku }}
                                    </h5>
                                    <h1 class="product-title mb-2">
                                        {{ $products->title }}
                                    </h1>
                                    <div class="product-rating">
                                        <div class="star-rating" data-rating="">
                                            <!-- generate star rating dynamic use for loop -->

                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $products->total_rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor

                                        </div>
                                        <div class="reSee-link">

                                            ({{ $products->total_reviews }})
                                        </div>
                                    </div>

                                    <p class="description mb-0">
                                        {{ $products->short_description }}
                                    </p>

                                    <!-- if -->
                                    <hr class="my-5" />
                                    <p class="description mb-0"><b>Usage:</b>
                                        {{ $products->usage }}
                                    </p>


                                    <hr class="my-5" />

                                    <span class="price-amount mb-5">
                                        {{ $products->price }}
                                        <small style="font-size: 16px; color: #7b7b7b; font-weight: normal">for
                                            {{ $products->quantity }}
                                        </small>

                                        <p style="font-size: 10px; opacity: 0.7">
                                            *Price & Stock are subject to change anytime
                                        </p>

                                    </span>
                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center w-50">
                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart m-0">
                                                <a href="{{ $products->affiliate_link }}" target="_blank"
                                                    class="axil-btn btn-bg-primary">
                                                    Buy Now
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Product Action  -->
                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->
        </div>
        <div class="container">
            <div class="product-detail-section">
                <h2>Description</h2>
                <p>
                    {{ $products->description }}
                </p>
            </div>
            <hr class="my-5 w-50" />
            <div class="product-detail-section">
                <h2>Ingredients</h2>
                <p>
                    {{ $products->ingredients }}
                </p>
                <ul class="ingredients mt-3">
                    @foreach ($products->tags as $item)
                        <li><span>
                                {{ $item }}
                            </span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Start Recently Seeed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>Same
                        Category</span>
                    <h3 class="title">Similar Products</h3>
                </div>
                <div class="row row--15">
                    @foreach ($products->similarproducts as $item)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-one has-color-pick mt--40">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="{{ $item->image_link }}" alt="Product Images" />
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="{{ $item->affiliate_link }}" target="_blank">Buy Now</a>
                                            </li>
                                            <li class="select-option">
                                                <a class="btn-default"
                                                    href="{{ route('product', ['country' => Session::get('country'), 'category' => str_replace(' ', '-', $item->category), 'name' => $item->slug]) }}">See
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner text-center">
                                        <h5 class="title">
                                            <a href="">
                                                {{ $item->title }}
                                            </a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">
                                                {{ $item->price }}
                                            </span>
                                        </div>
                                        <h6 class="description my-1">
                                            {{ $item->short_description }}
                                        </h6>
                                        <p style="font-size: 10px; opacity: 0.7">
                                            *Price & Stock are subject to change anytime
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="" class="axil-btn btn-bg-lighter btn-load-more">See All Products</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recently Seeed Product Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--12">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30 text-white">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text" />
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>
@endsection
