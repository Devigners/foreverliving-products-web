<div class="slider-activation-one axil-slick-dots">
    @foreach ($filteredproducts as $item)
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
<script>
    $(document).ready(function() {
        $('.axil-slick-dots').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>
