@include('includes._head_assets')

<div class="page-loader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header class="header axil-header header-style-2">
    <div class="axil-header-top pb-0">

        <div class="timer-box-date">
        </div>
        <div class="header-top-campaign campaign-data">
            <div class="container position-relative">
                <div class="campaign-content">
                    <div class="campaign-countdown">
                        <div class="countdown-section">
                            <div>
                                <div class="countdown-number" data-date="days">0</div>
                                <div class="countdown-unit">d</div>
                            </div>
                        </div>
                        <div class="countdown-section">
                            <div>
                                <div class="countdown-number" data-date="hours">0</div>
                                <div class="countdown-unit">h</div>
                            </div>
                        </div>
                        <div class="countdown-section">
                            <div>
                                <div class="countdown-number" data-date="minutes">0</div>
                                <div class="countdown-unit">m</div>
                            </div>
                        </div>
                        <div class="countdown-section">
                            <div>
                                <div class="countdown-number" data-date="seconds">0</div>
                                <div class="countdown-unit">s</div>
                            </div>
                        </div>
                    </div>
                    <p style="color: white">
                        Avail a SPECIAL DISCOUNT of 12%
                        off for a limited time.
                        <br class="d-md-none d-block" /><a href="">Get Your Offer</a>
                    </p>
                </div>
            </div>
        </div>
        @include('includes._top_bar')
        <div class="header-navbar bg-white pt-md-4 pb-md-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-sm-3 col-3">
                        <div class="header-brand">
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="nav-title">
                                <img src="{{ asset('images/logo.png') }}" alt="mainmenu-navbar-logo" width="60"
                                    height="60" />
                            </a>
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="logo logo-light">
                                <img src="{{ asset('images/logo.png') }}" alt="mainmenu-navbar-logo-2" width="60"
                                    height="60" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9 col-9 d-flex">
                        <div class="header-top-dropdown dropdown-box-style" style="flex: 1">
                            <div class="axil-search search-bar mr-0">
                                <button type="submit" class="icon wooc-btn-search">
                                    <i class="far fa-search"></i>
                                </button>
                                <input type="search" class="placeholder product-search-input" readonly value=""
                                    maxlength="128" placeholder="What are you looking for...." autocomplete="off" />
                            </div>
                        </div>

                        <ul class="action-list">
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="axil-sticky-placeholder"></div>
    <!-- Start Mainmenu Area  -->
    <div class="axil-mainmenu aside-category-menu">
        <div class="header-navbar bg-white pt-md-4 pb-md-4 d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-sm-3 col-3">
                        <div class="header-brand">
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="nav-title">
                                <img src="{{ asset('images/logo.png') }}" alt="mainmenu-navbar-logo" width="60"
                                    height="60" />
                            </a>
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="logo logo-light">
                                <img src="{{ asset('images/logo.png') }}" alt="mainmenu-navbar-logo-2" width="60"
                                    height="60" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-9 col-9 d-flex">
                        <div class="header-top-dropdown dropdown-box-style" style="flex: 1">
                            <div class="axil-search search-bar mr-0">
                                <button type="submit" class="icon wooc-btn-search">
                                    <i class="far fa-search"></i>
                                </button>
                                <input type="search" class="placeholder product-search-input" readonly value=""
                                    maxlength="128" placeholder="What are you looking for...." autocomplete="off" />
                            </div>
                        </div>

                        <ul class="action-list">
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-navbar">
                <div class="header-nav-department">
                    <aside class="header-department">
                        <button class="header-department-text department-title">
                            <span class="icon"><i class="fal fa-bars"></i></span>
                            <span class="text">Categories</span>
                        </button>
                        @include('includes._categories_sidebar')
                    </aside>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler">
                            <i class="fas fa-times"></i>
                        </button>
                        <div class="mobile-nav-brand">
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="logo">
                                <img src="{{ asset('images/logo.png') }}" alt="mobile-mainmenu-navbar-logo"
                                    width="60" height="60" />
                            </a>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mobile-nav-body">
                            <ul class="mainmenu">
                                <li>
                                    <a
                                        href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}">Home</a>
                                </li>
                                <li>
                                    <a
                                        href="{{ route('page-shop', ['country' => $country, 'restArea' => $statename]) }}">Shop</a>
                                </li>
                                <li>
                                    <a
                                        href="{{ route('page-join-now', ['country' => $country, 'restArea' => $statename]) }}">Join
                                        Now</a>
                                </li>
                                <li>
                                    <a
                                        href="{{ route('page-blogs', ['country' => $country, 'restArea' => $statename]) }}">Blogs</a>
                                </li>
                            </ul>
                            <div class="profile-details">
                                <div class="inner">
                                    <h5 style="font-size: medium">Kapil Singla</h5>
                                    <h6 style="font-size: small">Forever Business Owner (FBO)</h6>
                                    <h6 style="font-size: small">FBO ID: 200002416566</h6>
                                    <div class="popover-details-wrapper">
                                        <div class="popover-details">
                                            <h6>A Licensed Dental Surgeon (BDS); MBA</h6>
                                            <h6>Dental Public Health Resident; Drug Safety Manager</h6>
                                            <h6>Forever Business Owner (FBO) ID: 200002416566</h6>
                                            <h6>Independent FLP Distributor Since Jan 2011</h6>
                                            <a
                                                href="mailto:yourflpdistributor@gmail.com">yourFLPdistributor@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dummy-profile-image">
                                    <img src="{{ asset('images/about/about-me.jpg') }}" alt="about-me-profile"
                                        style="border-radius: 100%" />
                                </div>
                            </div>
                            <div class="mainmenu-nav-title fadeInDown w-100">
                                <div class="d-flex align-items-center">
                                    <div class="axil-search search-bar mr-0">
                                        <button type="submit" class="icon wooc-btn-search">
                                            <i class="far fa-search"></i>
                                        </button>
                                        <input type="search" class="placeholder product-search-input" readonly
                                            value="" maxlength="128" placeholder="What are you looking for...."
                                            autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area  -->
</header>
