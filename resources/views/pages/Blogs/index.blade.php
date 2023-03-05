@extends('layouts.app')
@section('content')
    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item">
                                    <a href="{{ route('page-home') }}">Home</a>
                                </li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">
                                    Blogs
                                </li>
                            </ul>
                            <h1 class="title">Blogs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="axil-blog-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-5">
                            @foreach ($data as $blog)
                                <div class="col-md-6">
                                    <div class="content-blog blog-grid">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a
                                                    href="{{ route('page-blogs-detail', ['country' => 'unitedStates', 'id' => $blog->id]) }}">
                                                    <img src="{{ env('API_GET_IMAGE') . $blog->image->id }}/400/400"
                                                        alt="Blog Images" loading="lazy" />
                                                </a>
                                                <div class="blog-category">
                                                    <a href="#">{{ $blog->categories[0] }}</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a
                                                        href="{{ route('page-blogs-detail', ['country' => 'unitedStates', 'id' => $blog->id]) }}">{{ $blog->title }}</a>
                                                </h5>

                                                <div class="read-more-btn">
                                                    <a class="axil-btn right-icon"
                                                        href="{{ route('page-blogs-detail', ['country' => 'unitedStates', 'id' => $blog->id]) }}">Read
                                                        More <i class="fal fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_tag_cloud">
                                <h6 class="widget-title">Categories</h6>
                                <div class="tagcloud">
                                    @foreach ($pageCat as $item)
                                        <p>{{ $item }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
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
