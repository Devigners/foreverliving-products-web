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
                            <div class="show-value">
                                <img src="{{ asset('images/countries/usa.jpg') }}" alt="usa-flag-icon" />
                                <span>USA</span>
                            </div>
                            @if (Route::current()->getName() == 'page-home')
                                <div class="select-dropdown">
                                    @foreach ($countries as $country)
                                        <a
                                            href="{{ route('page-home', strtolower(str_replace(' ', '', $country->name))) }}">
                                            <div class="select-item" value="{{ $country->iso_name }}">
                                                @if ($country->iso_name == 'US')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                                                        alt="United States" />
                                                @elseif($country->iso_name == 'GB')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                                                        alt="Great Britain" />
                                                @elseif($country->iso_name == 'AU')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg"
                                                        alt="Australia" />
                                                @elseif($country->iso_name == 'CA')
                                                    <img class="country-flag"
                                                        src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg"
                                                        alt="Canada" />
                                                @endif

                                                {{ $country->iso_name }}
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @else
                                <div class="select-dropdown">
                                    @foreach ($countries as $country)
                                        <a
                                            href="{{ route('page-shop', strtolower(str_replace(' ', '', $country->name))) }}">
                                            <div class="select-item" value="unitedstates">
                                                <img src="{{ asset('images/countries/usa.jpg') }}"
                                                    alt="usa-flag-icon" />
                                                {{ $country->iso_name }}
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
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
