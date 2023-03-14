@extends('layouts.app')
@section('content')
    <main class="main-wrapper">
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="inner">
                    <ul class="axil-breadcrumb">
                        <li class="axil-breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="separator"></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">
                            Join Now
                        </li>
                    </ul>
                    <h1 class="title">Find a Sponsor & Join Now</h1>
                    <p class="description">
                        There are <u>two great ways</u> to join Forever Living!
                        <br><br>
                        1. As a Forever Preferred Customer (FPC), you
                        will get 5% off on retail purchases for simply creating an account. Get even more discounted
                        products after completing a 2cc purchase.
                        <br><br>
                        2. As a Forever Business Owner (FBO), you can generate additional revenue by promoting the products.
                        You'll be able to buy goods at a discount and sell them to customers at full price as an FBO, and
                        you'll be able to teach others how to do the same.<br><br><b><u><i>Scroll down &amp; Begin your
                                    journey right away!</i></u></b>
                    </p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row row--80">
                    <div class="col-12 col-md-6">
                        <div class="join-box green">
                            <h3>Forever Preferred Customer (FPC)</h3>
                            <img src="{{ asset('images/join/1.jpg') }}" alt="" />
                            <h3>Forever Preferred Customer</h3>
                            <p>
                                As a Forever Preferred Customer, you'll get 5% off on future
                                purchases and be a part of our exclusive club of insiders that
                                will get updates on new products, promotions and news before
                                anyone else.
                            </p>
                            @if ($country == 'unitedstates')
                                <a href="https://bit.ly/PreferredCustomer-USA" class="axil-btn btn-bg-primary">Join as a FPC
                                </a>
                            @elseif($country == 'australia')
                                <a href="https://bit.ly/PreferredCustomer-AUS" class="axil-btn btn-bg-primary">Join as a FPC
                                </a>
                            @elseif($country == 'canada')
                                <a href="https://bit.ly/PreferredCustomer-CAN" class="axil-btn btn-bg-primary">Join as a
                                    FPC</a>
                            @elseif($country == 'greatbritain')
                                <a href="https://bit.ly/PreferredCustomer-GBR" class="axil-btn btn-bg-primary">Join as a
                                    FPC</a>
                            @else
                                <a href="https://bit.ly/PreferredCustomer-USA" class="axil-btn btn-bg-primary">Join as a FPC
                                </a>
                            @endif
                            <br>
                            <br>
                            <p>
                                Forever Living has a range of health-promoting products that span
                                nutrition and wellness, beauty, and home care. From Aloe Vera
                                drinks to essential oils and dietary supplements – there really is
                                something for everyone! All these products are made from natural
                                ingredients that are vegan-friendly and free from preservatives or
                                additives. When ordering from Forever Living, you can be sure
                                you’re getting the best quality product at an affordable price.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="join-box purple">
                            <h3>Forever Business Owner (FBO)</h3>
                            <img src="{{ asset('images/join/2.jpg') }}" alt="" />
                            <h3>Forever Business Owner</h3>
                            <p>
                                Are you ready to build your Forever business and earn an extra
                                income by sharing the products? As an FBO, you'll be able to
                                purchase products at a discount and retail them at full price, and
                                show others how to do the same.
                            </p>
                            @if ($country == 'unitedstates')
                                <a class="axil-btn btn-bg-primary" href="https://bit.ly/FBO-USA">Join as a FBO
                                </a>
                            @elseif($country == 'australia')
                                <a class="axil-btn btn-bg-primary" href="https://bit.ly/FBO-AUS">Join as a FBO</a>
                            @elseif($country == 'canada')
                                <a class="axil-btn btn-bg-primary" href="https://bit.ly/FBO-CAN">Join as a FBO</a>
                            @elseif($country == 'greatbritain')
                                <a class="axil-btn btn-bg-primary" href="https://bit.ly/FBO-GBR">Join as a FBO</a>
                            @else
                                <a class="axil-btn btn-bg-primary" href="https://bit.ly/FBO-USA">Join as a FBO</a>
                            @endif
                            <br>
                            <br>
                            <p>
                                We included a great range of products for you to use and market from our
                                flagship Forever Aloe Vera Gel® to personal care, skincare and nutritional
                                favorites. You’ll also find some helpful marketing materials ready to help
                                you market your Forever business.
                            </p>
                            <h6 style="margin-bottom: 0px;">
                                @if ($country == 'unitedstates')
                                    Start Your Journey Pak - USA
                                @elseif($country == 'australia')
                                    Start Your Journey C9 COMBO PACK - AUS
                                @elseif($country == 'canada')
                                    Start Your Journey Pak - CAN
                                @elseif($country == 'greatbritain')
                                    Start Your Journey Pak - GBR
                                @else
                                    Start Your Journey Pak - USA
                                @endif

                            </h6>

                            @if ($country == 'unitedstates')
                                <p>
                                    • 12 PACK OF 330ML ALOE VERA GEL MINIS • FOREVER ARGI+ • FOREVER LEMON AND LAVENDER
                                    ESSENTIAL OILS • FOREVER ARCTIC SEA • FOREVER ACTIVE PRO-B • ALOE VERA GELLY • ALOE HEAT
                                    LOTION • ALOE PROPOLIS CREME • ALOE MOISTURIZING LOTION • ALOE LIQUID SOAP • FOREVER
                                    ALOE SCRUB • FOREVER BRIGHT TOOTHGEL • ALOE LIPS • ENGLISH PRODUCT CATALOG • ALOE AS
                                    NATURE INTENDED (SINGLE) • WHY FOREVER VALUE PAK
                                </p>
                            @elseif($country == 'greatbritain')
                                <p>
                                    • FOREVER ALOE VERA GEL X 2 • FOREVER ALOE BERRY NECTAR X 2 • FOREVER BRIGHT TOOTHGEL X
                                    2 • ALOE EVER-SHIELD DEODORANT X 2 • ALOE PROPOLIS CRÈME X 2 • ALOE VERA GELLY X 2 •
                                    ALOE LIPS X 2 • FOREVER LITE ULTRA – 15 SERVING POUCH – VANILLA X 2 • ALOE MOISTURISING
                                    LOTION X 2 • AVOCADO FACE & BODY SOAP X 2 • ALOE SHOT GLASS X 1 • RECEIPT PAD X 1 •
                                    PRODUCT BROCHURE X 1 • FBO ORDER FORM X 1 • FIRST STEPS TO MANAGER BROCHURE X 1 • ALOE
                                    FLYER X 10 • WELCOME BOOKLET X 1 • EAGLE PIN X 1 • PRODUCT MANUAL X 1 • DSA EARNINGS
                                    OPPORTUNITIES X 1 • DSA SHOPPING AT HOME X 1 • DOCUMENT CASE • PRODUCT INFORMATION FLYER
                                    A5 X 10 • BUSINESS INFORMATION FLYER A5 X 10 • CONTACT MARKETING CARDS A6 FOLDED X 25 •
                                    COLLAGEN FLYER X 1 • PRICE LIST X 1
                                </p>
                            @elseif($country == 'australia')
                                <p>
                                    C9 COMBO PACK 1: • ALOE VERA GEL - 1LTR X2 • FOREVER LITE POUCH - VANILLA X 1 • FOREVER
                                    FIBER X1 • GARCINIA PLUS X 1 • THERM X 1
                                    C9 COMBO PACK 2: • ALOE VERA GEL - 1LTR X2 • FOREVER LITE POUCH - CHOCOLATE X 1 •
                                    FOREVER FIBER X1 • GARCINIA PLUS X 1 • THERM X 1
                                </p>
                            @elseif($country == 'canada')
                                <p>
                                    • FOREVER LITE ULTRA VANILLA • ALOE LIPS (2) • FOREVER BRIGHT (2) • PROPOLIS CRÈME (2) •
                                    ALOE VERA GELLY (2) • MOISTURIZING LOTION (2) • ALOE HEAT LOTION (2) • EVER SHIELD •
                                    ALOE MSM GEL • ALOE SCRUB • ARCTIC SEA • FOREVER ACTIVE PRO-B • JOJOBA SHAMPOO • JOJOBA
                                    CONDITIONING RINSE • ALOE LIQUID SOAP SOAP • ALOE VERA GEL (2) • ALOE BERRY NECTAR • WHY
                                    FOREVER (SINGLE) • ALOE BROCHURE • PRODUCT BROCHURE
                                </p>
                            @else
                                <p>
                                    • 12 PACK OF 330ML ALOE VERA GEL MINIS • FOREVER ARGI+ • FOREVER LEMON AND LAVENDER
                                    ESSENTIAL OILS • FOREVER ARCTIC SEA • FOREVER ACTIVE PRO-B • ALOE VERA GELLY • ALOE HEAT
                                    LOTION • ALOE PROPOLIS CREME • ALOE MOISTURIZING LOTION • ALOE LIQUID SOAP • FOREVER
                                    ALOE SCRUB • FOREVER BRIGHT TOOTHGEL • ALOE LIPS • ENGLISH PRODUCT CATALOG • ALOE AS
                                    NATURE INTENDED (SINGLE) • WHY FOREVER VALUE PAK
                                </p>
                            @endif
                            <p>
                                *Price & Contents in pak are subject to change based on location & availability.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
