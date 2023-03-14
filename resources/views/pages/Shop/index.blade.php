@extends('layouts.index')
@section('content')
    <main class="main-wrapper">
        <!-- Start Slider Area -->
        <div class="axil-main-slider-area main-slider-style-2">
            <div class="container">
                <div class="d-flex w-100">
                    <div class="department-menu-col">
                        @include('includes._categories_sidebar')
                    </div>
                    <div class="banner-area">
                        <div class="slider-offset-left">
                            <div class="row row--20">
                                <div class="col-lg-9">
                                    <div class="slider-box-wrap" id="dyn_prod">
                                        <div class="slider-activation-one axil-slick-dots">
                                            @foreach ($firstthreeproducts as $item)
                                                <div class="single-slide slick-slide">
                                                    <div class="main-slider-content">
                                                        <span class="subtitle">{{ $item->category }}
                                                        </span>
                                                        <h2 class="title">{{ $item->title }}</h2>
                                                        <div class="shop-btn">
                                                            <a href="{{ $item->affiliate_link }}" class="axil-btn">Shop Now
                                                                <i class="fal fa-long-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="main-slider-thumb">
                                                        <img src="{{ $item->image_link }}" alt="Slider Images">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="slider-product-box single-product-box" style="height: 100%">
                                        <div class="product-thumb">
                                            <a href="#">
                                                @if ($country == 'unitedstates')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                                                        alt="United States" />
                                                @elseif($country == 'greatbritain')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                                        alt="Great Britain" />
                                                @elseif($country == 'australia')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg"
                                                        alt="Australia" />
                                                @elseif($country == 'canada')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg"
                                                        alt="Canada" />
                                                @endif
                                            </a>
                                        </div>
                                        <span class="price">{{ $country }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                            @foreach ($filteredoffercards as $item)
                                @if ($item['country_links'])
                                    <div class="col mb-3">
                                        <div class="home-service-box"
                                            @if ($item['type'] == 'visit-store-cards') data-color="light-blue" @elseif($item['type'] == 'join-and-save-cards') data-color="purple" @else data-color="green" @endif>

                                            <div class="inner">
                                                @if ($item['type'] == 'discount-cards')
                                                    <h5>Visit Our<br />Online Store</h5>
                                                    <h6>for United States</h6>
                                                @elseif($item['type'] == 'visit-store-cards')
                                                    <h5>Limited 12% Off</h5>
                                                    <h6>No Joining Needed</h6>
                                                @elseif($item['type'] == 'join-and-save-cards')
                                                    <h5>Preferred Customer</h5>
                                                    <h5>Gets 5% Off</h5>
                                                    <h6>Instantly & Forever</h6>
                                                @elseif($item['type'] == 'free-shipping-cards')
                                                    <h5>Hurry!</h5>
                                                    <h5>Free Shipping</h5>
                                                    <h6>on US orders of 50$ or more</h6>
                                                @endif
                                                <img src="{{ asset('images/icons/drop-shipping.png') }}"
                                                    alt="free-shipping-icon" class="mt-4" />
                                            </div>
                                            <p style="font-size: 12px; opacity: 0.7; margin-top: 10px">
                                                *This offer is subject to change anytime
                                            </p>
                                            <a class="btn" role="button" href="{{ $item['country_links'] }}">
                                                Get Now
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            {{-- <div class="col mb-3 campaign-data">
                                <div class="home-service-box" data-color="light-blue">
                                    <div class="inner">
                                        <h5>Limited 12% Off</h5>
                                        <h6>No Joining Needed</h6>
                                        <ul class="timer-box">
                                            <li><span data-date="days">0</span>d</li>
                                            <li><span data-date="hours">0</span>h</li>
                                            <li><span data-date="minutes">0</span>m</li>
                                            <li><span data-date="seconds">0</span>s</li>
                                        </ul>
                                    </div>
                                    <p style="font-size: 12px; opacity: 0.7; margin-top: 10px">
                                        *This offer is subject to change anytime
                                    </p>
                                    <a class="btn" role="button" href="">
                                        Click Now
                                    </a>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="home-service-box" data-color="purple">
                                    <div class="inner">
                                        <h5>Preferred Customer</h5>
                                        <h5>Gets 5% Off</h5>
                                        <h6>Instantly & Forever</h6>
                                    </div>
                                    <p style="font-size: 12px; opacity: 0.7; margin-top: 10px">
                                        *This offer is subject to change anytime
                                    </p>
                                    <a class="btn" role="button" href="">
                                        Join FLP Family
                                    </a>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="home-service-box" data-color="green">
                                    <div class="inner">
                                        <h5>Visit Our<br />Online Store</h5>
                                        <h6>for United States</h6>
                                    </div>
                                    <p style="font-size: 12px; opacity: 0.7; margin-top: 10px">
                                        *This offer is subject to change anytime
                                    </p>
                                    <a class="btn" role="button" href="">
                                        Check it Out
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary">
                        <i class="far fa-shopping-basket"></i> Our Products</span>
                    <h2 class="title">Explore Our Products</h2>
                </div>
                <div class="row row--15" id="product-lists">
                    @foreach ($products as $item)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="axil-product product-style-one has-color-pick mt--40">
                                <div class="thumbnail">
                                    <a
                                        href="{{ route('product', ['country' => Session::get('country'), 'state' => request()->get('state'), 'category' => str_replace(' ', '-', $item->singlecategory), 'name' => $item->slug]) }}">
                                        <img src="{{ $item->image_link }}" alt="{{ $item->title }}">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="select-option">
                                                <a href="{{ $item->affiliate_link }}" target="_blank">Buy Now</a>
                                            </li>
                                            <li class="select-option">
                                                <a class="btn-default"
                                                    href="{{ route('product', ['country' => Session::get('country'), 'category' => str_replace(' ', '-', $item->singlecategory), 'name' => $item->slug]) }}">See
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner text-center">
                                        <h5 class="title">
                                            <a href="">{{ $item->title }}</a>
                                        </h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">
                                                {{ $item->price }}
                                            </span>
                                        </div>
                                        <h6 class="description my-1">
                                            {{ $item->short_description }}
                                        </h6>
                                        <p style="font-size: 9px; opacity: 0.7">
                                            *Price & Stock are subject to change anytime
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Expolre Product Area  -->

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
