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
    $pages = '(?!shop|joinnow|blogs|blog-details|product|loadproducts)[a-zA-Z-]+';
    $where = [
        'country' => $pages,
        'restArea' => $pages,
    ];

    // Home
    Route::get('/{country?}/{restArea?}', [PageController::class, "index"])->name('home')->where($where);

    // Shop
    Route::get('/shop/{country}/{restArea?}', [PageController::class, "shop"])->name('shop')->where($where);

    // Load More Products based on category //

    Route::get('loadproducts/{country?}/{category?}', [PageController::class, "loadMoreProducts"])->name('loadproducts');

    // Join Now
    Route::get('joinnow/{country}/{restArea?}', [PageController::class, "joinNow"])->name('join-now')->where($where);
    // Route::get('/{country}/joinnow', [PageController::class, "joinNow"])->name('join-now');

    // Blogs
    Route::get('blogs/{country}/{restArea?}', [PageController::class, "blogs"])->name('blogs')->where($where);
    // Route::get('/{country}/blogs', [PageController::class, "blogs"])->name('blogs');

    // Blog Details
    Route::get('/{country}/{restArea?}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail')->where($where);
    Route::get('/{country}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail');
}); 

Route::get('product/{country}/{restArea?}/{category}/{name}', [PageController::class, "productDetail"])->name('product');