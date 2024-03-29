@extends('layouts.app')
@section('content')
    <main class="main-wrapper">
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="axil-single-post post-formate post-standard">
                <div class="container">
                    <div class="content-block">
                        <div class="inner">
                            <div class="post-thumbnail">
                                <img src="{{ env('API_IMAGE_URL') . $data->image->c_img }}" alt="Blog Images">
                            </div>
                            <!-- End .thumbnail -->
                        </div>
                    </div>
                    <!-- End .content-blog -->
                </div>
            </div>
            <!-- End .single-post -->
            <div class="post-single-wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="single-blog col-lg-8 axil-post-wrapper">
                            <div class="post-heading">
                                <h2 class="title">
                                    {{ $data->title }}
                                </h2>
                                <p>
                                    Published on: 12/12/2020
                                </p>
                            </div>
                            <div>
                                {!! $data->description !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Start Sidebar Area  -->
                            <aside class="axil-sidebar-area">
                                <!-- Start Single Widget  -->
                                <div class="axil-single-widget mt--40 widget_tag_cloud">
                                    <h6 class="widget-title">Tags</h6>
                                    <div class="tagcloud">
                                        @foreach ($data->tags as $tag)
                                            <p>{{ $tag }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Single Widget  -->
                            </aside>
                            <!-- End Sidebar Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->

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
