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
                            <h1 class="title">Forever Living Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6 d-flex justify-content-end">
                        <a href="#">
                            <img class="country-flag" src="" height="160" width="160" alt="Product" />
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
                            <p>
                                Forever Living Products is quickly becoming an international sensation. With its diverse
                                range of natural products, the company has been able to establish a presence in different
                                states across the world. From nutritional supplements and personal care products to
                                bee-derived skincare items, Forever Living Products have become popular among customers
                                looking for high-quality yet affordable options.
                                <br>
                                <br>
                                The company makes sure that its products are grown and produced in natural habitats along
                                with stringent quality control measures. In addition, their team of qualified professionals
                                ensures that all ingredients used are safe and effective for use. This commitment to
                                excellence has allowed them to gain immense popularity in various countries such as the
                                <b>United States, Australia, Canada, and the United Kingdom,</b> and many more. Customers
                                from these countries can now enjoy access to all of Forever Living's unique offerings
                                without having to worry about any potential risks or side effects associated with their
                                usage.
                            </p>
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
                            <a href="" class="axil-btn btn-bg-primary">Shop Now*</a>
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
                            <img src="" alt="about" />
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
                <div class="product-detail-section">
                    <h4>Products Line In</h4>
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
