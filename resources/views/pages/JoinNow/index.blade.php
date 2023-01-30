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
				<h1 class="title">Join Now</h1>
				<p class="description">
					There are two great ways to join Forever! As a Preferred Customer, you
					will get 5% off on retail purchases for simply creating an account.
					Becoming a Forever Business Owner gives you the opportunity to build a
					business and build an extra income by sharing the products. Explore
					both options below and select how you want to experience Forever.
				</p>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row row--80">
				<div class="col-12 col-md-6">
					<div class="join-box green">
						<img src="{{ asset('images/join/1.jpg') }}" alt="" />
						<h3>Forever Preferred Customer</h3>
						<p>
							As a Forever Preferred Customer, you'll get 5% off on future
							purchases and be a part of our exclusive club of insiders that
							will get updates on new products, promotions and news before
							anyone else.
						</p>
						<a href=""
							class="axil-btn btn-bg-primary">Join
						</a>
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
						<img src="{{ asset('images/join/2.jpg') }}" alt="" />
						<h3>Forever Business Owner</h3>
						<p>
							Are you ready to build your Forever business and earn an extra
							income by sharing the products? As an FBO, you'll be able to
							purchase products at a discount and retail them at full price, and
							show others how to do the same.
						</p>
						<a class="axil-btn btn-bg-primary"
							href="">Join
						</a>
						<br>
						<br>
						<p>
							We included a great range of products for you to use and market from our
							flagship Forever Aloe Vera Gel® to personal care, skincare and nutritional
							favorites. You’ll also find some helpful marketing materials ready to help
							you market your Forever business.
						</p>
						<h6 style="margin-bottom: 0px;">Start Your Journey C9 COMBO PACK -

						</h6>
                        <h6 style="margin-bottom: 0px;">Start Your Journey Pak - </h6>
						<p>

						</p>
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
