<?php

namespace App\Providers;

use App\Models\Countries;
use App\Models\OfferCards;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $countries = Countries::getWithStatus();

        $viewData = [
            'countries' => $countries,
            'validUntil' => '',
        ];

        $validUntil = OfferCards::where('type', 'discount-cards')->first();

        if($validUntil && $validUntil->valid_until) {
            $viewData['validUntil'] = Carbon::parse($validUntil->valid_until)->format('Y-m-d');
        }

        View::share('viewData', $viewData);
    }
}
