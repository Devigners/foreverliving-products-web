@include('includes._head_assets')
<div class="page-loader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--[if lte IE 9]>
 <p class="browserupgrade">
  You are using an <strong>outdated</strong> browser. Please
  <a href="https://browsehappy.com/">upgrade your browser</a> to improve your
  experience and security.
 </p>
<![endif]-->
<!-- Start Header -->
<header class="header axil-header header-style-2">
    <div class="timer-box-date"></div>
    {{-- <div class="header-top-campaign campaign-data">
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
                    Avail a special discount of 12%
                    off for limited time.
                    <br class="d-md-none d-block" /><a href="">Get Your Offer</a>
                </p>
            </div>
        </div>
    </div> --}}
    @include('includes._top_bar')
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand pb-0" style="padding-bottom: 0 !important">
                    <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                        class="nav-title">
                        <img src="{{ asset('images/logo.png') }}" alt="sticky-navbar-logo" width="60"
                            height="60" />
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav d-flex justify-content-between w-100">
                        <button class="mobile-close-btn mobile-nav-toggler">
                            <i class="fas fa-times"></i>
                        </button>
                        <div class="mobile-nav-brand">
                            <a href="{{ route('page-home', ['country' => $country, 'restArea' => $statename]) }}"
                                class="nav-title">
                                <img src="{{ asset('images/logo.png') }}" alt="mainmenu-navbar-logo" width="80"
                                    height="80" />
                            </a>
                        </div>
                        <ul class="mainmenu justify-content-start">
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
                        @mobile
                            <div class="profile-details d-sm-none d-flex">
                                <div class="inner">
                                    <h5 style="font-size: large">Kapil Singla</h5>
                                    <h6 style="font-size: medium">FBO ID: 200002416566</h6>
                                    <div class="popover-details-wrapper">
                                        <div class="popover-details">
                                            <h6>A Licensed Dental Surgeon (BDS); MBA</h6>
                                            <h6>Dental Public health Resident; Drug Safety Manager</h6>
                                            <h6>Independent FLP Distributor Since Jan 2011</h6>
                                            <a href="mailto:yourflpdistributor@gmail.com">yourflpdistributor@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dummy-profile-image">
                                    <img src="{{ asset('images/about/about-me.jpg') }}" alt="about-me-profile"
                                        style="border-radius: 100%" />
                                </div>
                            </div>
                        @elsemobile
                        @endmobile
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-top-dropdown dropdown-box-style w-100">
                    <div class="axil-search search-bar mr-0" style="display: block !important; margin-left: 0">
                        <input type="search" class="placeholder product-search-input pl-0" readonly value=""
                            maxlength="128" placeholder="What are you looking for...." autocomplete="off" />
                    </div>
                </div>
                @mobile
                @elsemobile
                    <div class="d-md-block d-none">
                        <div class="profile-details">
                            <div class="inner">
                                <h5 style="font-size: medium">Kapil Singla</h5>
                                <h6 style="font-size: small">Forever Business Owner (FBO)</h6>
                                <h6 style="font-size: small">FBO ID: 200002416566</h6>
                                <div class="popover-details-wrapper">
                                    <div class="popover-details">
                                        <h6>A Licensed Dental Surgeon (BDS); MBA</h6>
                                        <h6>Dental Public Health Resident; Drug Safety Manager</h6>
                                        <h6>Independent FLP Distributor Since Jan 2011</h6>
                                        <a href="mailto:yourflpdistributor@gmail.com">yourFLPdistributor@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dummy-profile-image">
                                <img src="{{ asset('images/about/about-me.jpg') }}" alt="about-me-profile-2"
                                    style="border-radius: 100%" />
                            </div>
                        </div>
                    </div>
                @endmobile
                <div class="header-action mt-0 d-flex align-items-center d-md-none d-block"
                    style="margin-left: 0 !important">
                    <ul class="action-list" style="padding-left: 15px !important">
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
</header>
<!-- End Header -->
