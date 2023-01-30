@php
    $countries = $viewData['countries'];
@endphp

<div class="top-bar">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="header-top-dropdown">
				<div class="top-header-points">
					<div class="h-select-group d-flex align-items-center">
						<div class="select-box">
							<div class="show-value"></div>
							<div class="select-dropdown">
                                @foreach ($countries as $country)
                                    <div class="select-item" value="unitedstates">
                                        <img src="{{ asset('images/countries/usa.jpg') }}"
                                            alt="usa-flag-icon" />
                                        {{ $country->name }}
                                    </div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="top-header-points">
					<div class="d-flex align-items-center">
						<i class="far fa-search"></i> &nbsp;&nbsp;
						<input id="search-area" placeholder="Search your area..." />
					</div>
				</div>
			</div>
			<div class="top-header-points google-language">
				<div class="h-select-group">
					<div id="google_translate_element"></div>
				</div>
			</div>
		</div>
	</div>
</div>
