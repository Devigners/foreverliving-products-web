<!-- Start Footer Area  -->
<footer class="axil-footer-area footer-style-2">
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container pb-4">
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-12">
                    <div class="col-xl-12 text-center text-md-left">
                        <p>
                            <b>Registered FBO Address</b>: 200 Captains Row, Chelsea,
                            Massachusetts, USA 02150
                        </p>
                    </div>
                    <div class="col-xl-12 copyright-left">
                        <p>
                            <b>Copyright 2023</b>:
                            <a href="https://foreverliving-products.com/shop">ForeverLiving-Products.com</a>
                        </p>
                    </div>
                    <div class="col-xl-12 copyright-left">
                        <p><b>Forever Business Owner (FBO) ID:</b> 200002416566</p>
                    </div>
                    <div class="col-xl-12 copyright-left">
                        <p>
                            <b>Disclaimer:</b><em>
                                FLP products are not intended to diagnose, treat, cure or
                                prevent any disease. Any statement on this website has not been
                                evaluated by the FDA/EMA/MHRA or any other drug/food regulatory
                                agency.</em>
                        </p>
                    </div>
                    <div class="col-xl-12 copyright-left d-block d-md-none">
                        <hr style="margin: 15px 0; border-color: #f6f7fb" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="copyright-left">
                        <div class="col-xl-12">
                            <b class="d-block">Relating Forever Living Company:</b>
                            <a href="https://foreverliving.com/unitedstates/en-us/forever-living-faq">Retail FAQs</a>
                        </div>
                        <div class="col-xl-12">
                            <a href="https://foreverliving.com/unitedstates/en-us/business-opportunity-faq">Business
                                Opportunity FAQs</a>
                        </div>
                        <!-- <div class="col-xl-12">
       <a href="https://joinnow.foreverliving.com/income-disclosure"
        >Income Disclosure Statement</a
       >
      </div> -->

                        <!-- <div class="col-xl-12">
       <a
        href="https://cdn.foreverliving.com/content/MarketingConfigurableContent/CAN/Updated%20Privacy%20Policy%20/2023-01-01%20-%20Privacy%20Notice%20-%20FNL.pdf"
        >Privacy Notice</a
       >
      </div> -->
                        <div class="col-xl-12">
                            <a
                                href="https://cdn.foreverliving.com/content/MarketingConfigurableContent/USA/Policy%20/20221201%20NA_Co_Policy_E%20Titan%20FINAL.pdf">Company
                                Policies and Procedures</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="copyright-left">
                        <div class="col-xl-12 copyright-left">
                            <p>
                                <b class="d-block">Forever Living Customer Care:</b>
                                <a href="tel:0547494645">0547494645</a>
                            </p>
                        </div>
                        <div class="social-share mt-1">
                            <a href="https://www.facebook.com/foreverglobalhq"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/ForeverGlobalHQ/"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/ForeverGlobalHQ"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UC4TVgSTQYs94N57VDsoPsWA"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.pinterest.com/ForeverGlobalHQ/"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->

<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close">
        <i class="fas fa-times"></i>
    </button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search"
                        placeholder="Search your product here" />
                    <button type="submit" class="axil-btn btn-bg-primary">
                        f
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="search-result-header">
                <h6 class="title" id="total-result-found">Result Found</h6>
            </div>
            <div class="psearch-results">
                <div class="text-center">No product found!!</div>
            </div>
        </div>
    </div>
</div>
<!-- Header Search Modal End -->

<!-- jQuery JS -->
<script src="{{ asset('js/vendor/jquery.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.easy-autocomplete.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}?v=1.3"></script>

<!--For google translate-->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


<script>
    // load the products for the category //
    $(document).on('click', '[data-href="load_prod"]', function(e) {
        e.preventDefault();
        var category = $(this).attr('data-category');

        var url = "{{ route('page-loadproducts', 'unitedstates') }}";
        $.ajax({
            url: url + '/' + category,
            type: 'GET',
            success: function(data) {
                $('#dyn_prod').html('');
                $('#dyn_prod').html(data);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
</script>

<script>
    $(function() {
        $('.page-loader').fadeOut('fast');
    })

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: 'true',
            includedLanguages: 'en,zh,hi,es,fr,ar,bn,ru,pt,id,ur,de,ja,sw,mr,te,tr,ta,pa,ko,vi,ha,jv,it,th,gu,kn,fa,pl,fil,ps,uk,yo,ml,or,my,om,uz,ro,sd,tl',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
    }

    function navbarActive(url) {
        $(".mainmenu a[href='" + url + "']").addClass("active");
    }


    function navbarActive(url) {
        $(".mainmenu a[href='" + url + "']").addClass("active");
    }
    $(function() {
        navbarActive(window.location.pathname);
    });

    $("#search-area").easyAutocomplete({
        data: [],
        getValue: "name",
        theme: "square",
        cssClasses: "search-area-container",
        list: {
            maxNumberOfElements: 1000,
            match: {
                enabled: true,
            },
            onClickEvent: function() {
                var data = $("#search-area").getSelectedItemData();
                $("#search-area").val(data.name).trigger("change");
                window.location.href = data.url;
            },
            onShowListEvent: function() {
                $(".easy-autocomplete-container").addClass("border");
            },
            onHideListEvent: function() {
                $(".easy-autocomplete-container").removeClass("border");
            },
        },
    });

    // var Tawk_API = Tawk_API || {},
    //     Tawk_LoadStart = new Date();
    // (function() {
    //     var s1 = document.createElement("script"),
    //         s0 = document.getElementsByTagName("script")[0];
    //     s1.async = true;
    //     s1.src = 'https://embed.tawk.to/6391384adaff0e1306db746e/1gjnk7omv';
    //     s1.charset = 'UTF-8';
    //     s1.setAttribute('crossorigin', '*');
    //     s0.parentNode.insertBefore(s1, s0);
    //     window.Tawk_API.customStyle = {
    //         zIndex: 1
    //     };
    // })();

    // on click .select-box
    $("body").on("click", ".select-box .show-value", function(e) {
        e.preventDefault();
        var $this = $(this);
        var $selectBox = $this.closest(".select-box");
        $selectBox.toggleClass("open");
    });


    $(function() {
        var timerBox = $(".timer-box-date");
        var days = $("[data-date='days']");
        var hours = $("[data-date='hours']");
        var minutes = $("[data-date='minutes']");
        var seconds = $("[data-date='seconds']");

        var date = timerBox.attr("data-time");
        // add timezene United States
        var time = new Date(date).getTime() + 1000 * 60 * 60 * 5;
        var now = new Date().getTime();
        var distance = time - now;
        var expired = distance < 0;
        if (expired) {
            $('.campaign-data').hide();
        } else {
            var x = setInterval(function() {
                days.text(`${Math.floor(distance / (1000 * 60 * 60 * 24))}`);
                hours.text(`${Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))}`);
                minutes.text(`${Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))}`);
                seconds.text(`${Math.floor((distance % (1000 * 60)) / 1000)}`);
                if (distance < 0) {
                    clearInterval(x);
                    days.text("0");
                    hours.text("0");
                    minutes.text("0");
                    seconds.text("0");
                }
            }, 1000);
        }
    })
</script>
