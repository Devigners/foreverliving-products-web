@extends('layouts.app')
@section('content')
    <main class="main-wrapper home-page">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 col-md-8 col-6">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item">
                                    <a href="">Homepage</a>
                                </li>
                            </ul>
                            <h1 class="title">Forever Living Products ({{ $filteredcountryiso }})</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6 d-flex justify-content-end">
                        <a href="#">
                            {{-- {{ dd($filteredcountryiso) }} --}}
                            @if ($filteredcountryiso == 'US')
                                <img class="country-flag"
                                    src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                                    height="160" width="160" alt="United States" />
                            @elseif($filteredcountryiso == 'GB')
                                <img class="country-flag"
                                    src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                    height="160" width="160" alt="Great Britain" />
                            @elseif($filteredcountryiso == 'AU')
                                <img class="country-flag"
                                    src="https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg"
                                    height="160" width="160" alt="Australia" />
                            @elseif($filteredcountryiso == 'CA')
                                <img class="country-flag"
                                    src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg"
                                    height="160" width="160" alt="Canada" />
                            @endif

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start About Area  -->
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-thumbnail">
                            <div class="thumbnail text-center">
                                <img style="max-height: 350px; object-fit: cover; object-position: center;margin: 0 auto; width: auto"
                                    src="{{ asset('images/about/about-01.png') }}" alt="About Us" />
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-6">
                        <div class="about-content content-right">
                            <h1>Forever Living company in {{ $filteredcountryname }}</h1>
                            <p>
                                {{ $filteredcountryname }} is one of the most important markets for Forever Living Products
                                and the company has been active in {{ $filteredcountryname }} for several decades. The
                                presence of Forever Living Products in different states/counties/cities across
                                {{ $filteredcountryname }} has provided customers with access to a wide range of products
                                such as natural health supplements, weight loss products, skincare items, nutritional
                                beverages, and many more. Forever Living Products offers a variety of services to its
                                customers such as free delivery, customer support, and product training sessions for those
                                looking to start their own business selling Forever Living's products. Additionally, there
                                are several stores located throughout different states/counties/cities that offer discounted
                                prices on select merchandise and promotional events held periodically throughout the year.
                                The company is constantly expanding its reach across {{ $filteredcountryname }} by setting
                                up new locations and introducing new product lines that cater to local customer needs.
                            </p>

                            <p>
                                If you’re interested in finding out more information or contacting one of their
                                distributors, simply <strong><a
                                        href="https://foreverliving.com/usa/en-us/about?fboId=200002416566"
                                        style="color: var(--color-primary)">VISIT HERE</a></strong> to
                                join my FLP network, and feel free to email me <strong><a
                                        style="color: var(--color-primary)"
                                        href="mailo:YourFLPDistributor@gmail.com">@YourFLPDistributor@gmail.com</a></strong>
                            </p>

                            <a href="https://foreverliving.com/usa/en-us/about?fboId=200002416566"
                                class="axil-btn btn-bg-primary">Know More About FLP</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area  -->
        <!-- Start About Area  -->
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumbnail">
                            <img src="{{ asset('images/about/about-03.jpg') }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="about-content content-left">
                            <h3>Global Reach: Serving 150+ Countries</h3>
                            <p>
                                Forever Living Products Company is an international company with a
                                global reach. Established in 1978, the company has grown to serve
                                150+ countries worldwide. Forever Living Products puts customers
                                first and provides natural health and beauty products as well as
                                nutritional supplements, and bee-derived products. From its
                                headquarters in Arizona, USA, the company distributes its range of
                                products via a network of independent distributors across the
                                globe. As the largest grower, manufacturer, and distributor of
                                aloe vera-based health and beauty products in the world, Forever
                                Living Products has become synonymous with quality. With
                                operations across 5 continents including Europe, the Asia Pacific
                                region, the Middle East & Africa, South America, and North
                                America; this leading business ensures that its extensive range of
                                high-quality healthcare items are available to customers wherever
                                they may be in the world.
                            </p>
                            <a href="{{ route('page-shop', strtolower(str_replace(' ', '', $country))) }}"
                                class="axil-btn btn-bg-primary">Shop Now*</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-thumbnail">
                            <img src="{{ asset('images/about/about-02.png') }}"
                                style="max-height: 350px; object-fit: cover; object-position: center;" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content content-right">
                            <h3>Product Range: Wide Variety of Products</h3>
                            <p>
                                Forever Living Products Company has long been known for providing
                                an expansive product range to customers. Established in 1978, this
                                respected company offers a wide variety of wellness and beauty
                                products that are ideal for health-conscious individuals who want
                                to look and feel their best.
                                <br>
                                <br>
                                The Forever Living Products Company boasts an impressive array of
                                products which include nutritional supplements, skincare
                                solutions, weight management solutions, and natural aloe-based
                                beverages. All their products are designed to help people enjoy
                                improved health and vitality, as well as enhanced physical
                                appearance. The company also offers various accessories such as
                                shampoos, conditioners, facial cleansers, and moisturizers that
                                can be used in conjunction with their other products to maximize
                                the results they offer. With this comprehensive selection of
                                quality items available at competitive prices, Forever Living
                                Products Company is certain to have something that will meet your
                                individual needs.
                            </p>
                            <a href="{{ route('page-shop', strtolower(str_replace(' ', '', $country))) }}"
                                class="axil-btn btn-bg-primary">Check Our Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumbnail">
                            <img src="{{ asset('images/aloe/1-small.jpg') }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="about-content content-left">
                            <h3>
                                How to Become a 'Preferred Customer' and Get 5% Off Forever?
                            </h3>
                            <p>
                                Forever Living has a range of health-promoting products that span
                                nutrition and wellness, beauty, and home care. From Aloe Vera
                                drinks to essential oils and dietary supplements – there really is
                                something for everyone! All these products are made from natural
                                ingredients that are vegan-friendly and free from preservatives or
                                additives. When ordering from Forever Living, you can be sure
                                you’re getting the best quality product at an affordable price.
                                <br>
                                <br>
                                Ordering your Forever Living items is simple! You can order
                                directly through their website or through one of their independent
                                distributors. Customers have several choices when it comes to
                                delivery and pricing options when ordering Forever Living
                                products. First, customers can purchase items directly from their
                                local distributor or through the official website. The latter
                                option allows customers to take advantage of discounts and
                                promotions that are not available elsewhere. Second, delivery
                                times vary depending on where you live but should generally take
                                no more than 3-5 business days after purchase. Finally, the prices of
                                Forever Living products depend on which country they are being
                                purchased in - some countries may have higher prices than others
                                due to taxes or shipping costs involved in transporting the goods
                                internationally.
                            </p>
                            @if ($filteredcountryiso == 'GB')
                                <a href="https://bit.ly/PreferredCustomer-GBR" class="axil-btn btn-bg-primary">Become A
                                    Preferred Customer &amp; Get 5% Off*</a>
                            @elseif($filteredcountryiso == 'AU')
                                <a href="https://bit.ly/PreferredCustomer-AUS" class="axil-btn btn-bg-primary">Become A
                                    Preferred Customer &amp; Get 5% Off*</a>
                            @elseif($filteredcountryiso == 'CA')
                                <a href="https://bit.ly/PreferredCustomer-CAN" class="axil-btn btn-bg-primary">Become A
                                    Preferred Customer &amp; Get 5% Off*</a>
                            @else
                                <a href="https://bit.ly/PreferredCustomer-USA" class="axil-btn btn-bg-primary">Become A
                                    Preferred Customer &amp; Get 5% Off*</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-thumbnail">
                            <img style="object-fit: cover; object-position: top;"
                                src="{{ asset('images/about/about-07.png') }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-content content-right">
                            <h3>About Me and My FLP Journey</h3>
                            <p>
                                I am an experienced licensed dentist from India, completed my MBA
                                with a conc. in Healthcare Administration from the USA and now
                                working full-time as a drug safety project manager. I am also
                                doing a residency in Dental Public Health in Boston, USA where I
                                focus on population health in preventative and cost-effective
                                ways. I strongly believe that the first step to staying healthy
                                and living a longer life is to eat and drink healthy food.
                                <br>
                                <br>
                                Joining Forever Living Products (FLP) can be an exciting new
                                venture for many entrepreneurs. It is a health/wellness and beauty
                                direct-selling product company that offers an entrepreneurial
                                opportunity to those looking to start their own business from
                                home.
                                <br>
                                <br>
                                When I first heard about the FLP business opportunity from my
                                manager, I knew that was something I wanted to explore further. I
                                decided to do my research and learn more about the company, its
                                products, and the process of becoming a distributor. I focused
                                initially on just one of their products, Forever Bright Toothgel.
                                I found that Forever Bright Toothgel is created using an advanced
                                process that ensures all its natural minerals are retained during
                                processing and contains no sugar or fluoride or harsh chemicals or
                                artificial additives. That was enough to push me and join the FLP
                                family and here I am!
                                <br>
                                <br>
                                The process of joining FLP was straightforward and easy even back
                                in the year 2011. After I was invited to FLP by my sponsor, all I
                                had to do was fill out a simple application form online and choose
                                a <b>starter 2cc kit</b> worth US$350 ("Start Your Journey Value Pak") to get started
                                with my business. Once my application was approved, which didn’t
                                take too long, I became an official FLP distributor/Forever Business
                                Owner (FBO) right away!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumbnail">
                            @if ($filteredcountryiso == 'US')
                                <img src="https://cdn.foreverliving.com/content/products/images/start_your_journey_pak_pd_main_512_X_512_1569428747899.png"
                                    alt="about">
                            @elseif($filteredcountryiso == 'GB')
                                <img src="https://cdn.foreverliving.com/content/products/images/start_your_journey_pack_pd_main_512_X_512_1664568997643.jpg"
                                    alt="about">
                            @elseif($filteredcountryiso == 'AU')
                                <img src="https://cdn.foreverliving.com/content/products/images/syj_c9_combo_pack_pd_main_512_X_512_1656638991235.jpg"
                                    alt="about">
                            @elseif($filteredcountryiso == 'CA')
                                <img src="https://cdn.foreverliving.com/content/products/images/start_your_journey_pak_pd_main_512_X_512_1569434726154.png"
                                    alt="about">
                            @else
                                <img src="https://cdn.foreverliving.com/content/products/images/start_your_journey_pak_pd_main_512_X_512_1569428747899.png"
                                    alt="about">
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1">
                        <div class="about-content content-left">
                            <h3>How To Join FLP Business?<br>(Distributor/FBO Registration)</h3>
                            <p>
                                Forever Living products business is an amazing opportunity for
                                entrepreneurs who want to achieve financial freedom. If you’re
                                looking to join this lucrative industry, there are several steps
                                that you need to take. Here are the essential steps to get started
                                and succeed in this venture:
                                <br>
                                <br>
                                First, it’s important that you understand the basics of Forever
                                Living products business. Researching their products and getting
                                informed about their services will help you make informed
                                decisions. You can also check out customer reviews and feedback
                                from previous customers or distributors before signing up. Forever
                                Living provides a wealth of information on its website, including
                                detailed descriptions of each product they offer, as well as
                                helpful advice and tips on how to properly market them.
                                Additionally, there are many videos and tutorials available which
                                provide an in-depth look into the business model and methods used
                                by successful entrepreneurs who have been with Forever Living for
                                years. Furthermore, there are numerous discussion boards where
                                like-minded individuals can collaborate and share ideas about best
                                practices when it comes to joining this type of business.
                                <br>
                                <br>
                                Second, find a sponsor or mentor who can guide you
                                throughout your journey as a Forever Living product distributor
                                and invite you to join our FLP family. Look for someone with
                                experience in the industry so they can provide helpful advice and
                                tips on how to make more profits in the long run.
                            </p>
                            <p>
                                <strong>LOOKING FOR A FBO SPONSORSHIP IN {{ $filteredcountryiso }} ?</strong> – JOIN OUR
                                FLP BUSINESS FAMILY, SAVE 5% INSTANTLY ON YOUR FIRST ORDER & A LOT MORE ON YOUR NEXT ORDER

                            </p>
                            @if ($filteredcountryiso == 'GB')
                                <a href="https://bit.ly/FBO-GBR" class="axil-btn btn-bg-primary"
                                    style="margin: 5px 0px;">Start
                                    Your FBO Journey With
                                    2cc Value Pak Now*</a>
                            @elseif($filteredcountryiso == 'AU')
                                <a href="https://bit.ly/FBO-AUS" class="axil-btn btn-bg-primary"
                                    style="margin: 5px 0px;">Start
                                    Your FBO Journey With
                                    2cc Value Pak Now*</a>
                            @elseif($filteredcountryiso == 'CA')
                                <a href="https://bit.ly/FBO-CAN" class="axil-btn btn-bg-primary"
                                    style="margin: 5px 0px;">Start
                                    Your FBO Journey With
                                    2cc Value Pak Now*</a>
                            @else
                                <a href="https://bit.ly/FBO-USA" class="axil-btn btn-bg-primary"
                                    style="margin: 5px 0px;">Start
                                    Your FBO Journey With
                                    2cc Value Pak Now*</a>
                            @endif

                            <p>
                                We included a great range of products for you to use and market from our flagship Forever
                                Aloe Vera Gel® to personal care, skincare and nutritional favorites. You’ll also find some
                                helpful marketing materials ready to help you market your Forever business.
                            </p>

                            <h6 style="margin-bottom: 0px;">
                                @if ($filteredcountryiso == 'CA')
                                    Start Your Journey C9 COMBO PACK
                                @elseif($filteredcountryiso == 'GB')
                                    Start Your Journey C9 COMBO PACK
                                @else
                                    Start Your Journey Pak
                                @endif
                                -
                                {{ $filteredcountryiso == 'US' ? 'USA' : $filteredcountryiso }}
                            </h6>
                            </h6>
                            @if ($filteredcountryiso == 'US')
                                <p>
                                    • 12 PACK OF 330ML ALOE VERA GEL MINIS • FOREVER ARGI+ • FOREVER LEMON AND LAVENDER
                                    ESSENTIAL OILS • FOREVER ARCTIC SEA • FOREVER ACTIVE PRO-B • ALOE VERA GELLY • ALOE HEAT
                                    LOTION • ALOE PROPOLIS CREME • ALOE MOISTURIZING LOTION • ALOE LIQUID SOAP • FOREVER
                                    ALOE SCRUB • FOREVER BRIGHT TOOTHGEL • ALOE LIPS • ENGLISH PRODUCT CATALOG • ALOE AS
                                    NATURE INTENDED (SINGLE) • WHY FOREVER VALUE PAK
                                </p>
                            @elseif($filteredcountryiso == 'AU')
                                <p>
                                    C9 COMBO PACK 1: • ALOE VERA GEL - 1LTR X2 • FOREVER LITE POUCH - VANILLA X 1 • FOREVER
                                    FIBER X1 • GARCINIA PLUS X 1 • THERM X 1
                                    C9 COMBO PACK 2: • ALOE VERA GEL - 1LTR X2 • FOREVER LITE POUCH - CHOCOLATE X 1 •
                                    FOREVER FIBER X1 • GARCINIA PLUS X 1 • THERM X 1
                                </p>
                            @elseif($filteredcountryiso == 'GB')
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
                            @elseif($filteredcountryiso == 'CA')
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
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="row bg-color-lighter p-5" style="border-radius: 5px">
                    <div class="section-title-wrapper py-0">
                        <h3 class="title">Customer Reviews</h3>
                        <p>
                            Customer reviews are an invaluable source for understanding how well
                            a product works, and Forever Living Products are no exception.
                            Consumers who have tried these health and wellness products have
                            left glowing reviews, speaking to the efficacy of the brand's
                            offerings. Reviews provide insight into how effective each product
                            is in helping to achieve desired results while also offering
                            potential customers an unbiased look at what they can expect from
                            using them.
                        </p>
                    </div>
                    <!-- End .section-title -->
                    <div
                        class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                        <div class="slick-single-layout testimonial-style-one">
                            <div class="review-speech">
                                <p>
                                    “ I have been drinking this amazing drink twice a day everyday
                                    since 2012. It has made such a big difference in my skin,
                                    energy, digestion, and overall well-being. You give it a try,
                                    and make sure to be consistent daily. “
                                </p>
                            </div>
                            <div class="media">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/testimonials/image-1.png') }}" alt="testimonial image" />
                                </div>
                                <div class="media-body">
                                    <span class="designation">Earl</span>
                                    <h6 class="title">Best Aloe Drink Ever</h6>
                                </div>
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                        <div class="slick-single-layout testimonial-style-one">
                            <div class="review-speech">
                                <p>
                                    “ Without Aloe Vera Gel, I cannot imagine how my body works. “
                                </p>
                            </div>
                            <div class="media">
                                <div class="thumbnail">
                                    <img src="{{ asset('images/testimonials/image-2.png') }}" alt="testimonial image" />
                                </div>
                                <div class="media-body">
                                    <span class="designation">Juve</span>
                                    <h6 class="title">Best Health Drinks Ever</h6>
                                </div>
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <hr class="my-0 w-100" />
        </div>
        <section class="section-gap">
            <div class="container">
                @if ($getstated)
                    <div class="product-detail-section">

                        <h4>Delivering Across {{ $filteredcountryname }}</h4>

                        @foreach ($getstated as $item)
                            <a
                                href="{{ route('page-home', ['country' => strtolower(str_replace(' ', '', 'unitedstates')), 'restArea' => str_replace(' ', '', $item->name)]) }}">{{ $item->name }},
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
        <section class="section-gap">
            <div class="container">
                <div class="product-detail-section">
                    <h4>Products Line In {{ $filteredcountryiso }}</h4>
                    @foreach ($getproductslist as $item)
                        <a href="{{ route('product', ['country' => $country, 'restArea' => $statename, 'category' => str_replace(' ', '-', $item->category), 'name' => $item->slug]) }}"
                            style="text-transform:capitalize">{{ str_replace('-', ' ', $item->slug) }}<span>,
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End About Area  -->
        <!-- Start Axil Newsletter Area  -->
        <section class="section-gap">
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
        </section>
        <!-- End Axil Newsletter Area  -->
    </main>
@endsection
