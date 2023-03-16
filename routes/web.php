<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/searchproducts/{country?}/{name?}', [SearchController::class, "searchProductsdyn"])->name('searchproducts');

Route::group(['as' => 'page-'], function () {
    $pages = '(?!shop|joinnow|blogs|blog-details|product|loadproducts)[a-zA-Z]+';
    $where = [
        'country' => $pages,
        'restArea' => $pages,
        'extra' => $pages,
    ];


    // Home
    Route::get('/{country?}/{restArea?}/{extra?}', [PageController::class, "index"])->name('home')->where($where);

    // Shop
    Route::get('/{country}/{restArea?}/{extra?}/shop',[PageController::class, "shop"])->name('shop')->where($where);
    
    

    // Load More Products based on category //

    Route::get('loadproducts/{country?}/{category?}', [PageController::class, "loadMoreProducts"])->name('loadproducts');

    // Join Now
    Route::get('/{country}/{restArea?}/joinnow', [PageController::class, "joinNow"])->name('join-now')->where($where);
    // Route::get('/{country}/joinnow', [PageController::class, "joinNow"])->name('join-now');

    // Blogs
    Route::get('/{country}/{restArea?}/blogs', [PageController::class, "blogs"])->name('blogs')->where($where);
    // Route::get('/{country}/blogs', [PageController::class, "blogs"])->name('blogs');

    // Blog Details
    Route::get('/{country}/{restArea?}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail')->where($where);
    Route::get('/{country}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail');

    // Product Details
    Route::get('/{country}/{restArea?}/product/{category}/{name}', [PageController::class, "productDetail"])->name('product-detail')->where($where);
    Route::get('/{country}/product/{category}/{name}', [PageController::class, "productDetail"])->name('product-detail');

});
Route::get('/{country}/{restArea?}/{extra?}/product/{category}/{name}', [PageController::class, "productDetail"])->name('product');