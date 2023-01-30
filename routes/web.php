<?php

use App\Http\Controllers\PageController;
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

Route::group(['as' => 'page-'], function () {

    $pages = '(?!shop|joinnow|blogs|blog-details|product)[a-zA-Z]+';
    $where = [
        'country' => $pages,
        'restArea' => $pages,
    ];

    // Home
    Route::get('/{country?}/{restArea?}', [PageController::class, "index"])->name('home')->where($where);

    // Shop
    Route::get('/{country}/{restArea?}/shop', [PageController::class, "shop"])->name('shop')->where($where);
    Route::get('/{country}/shop', [PageController::class, "shop"])->name('shop');

    // Join Now
    Route::get('/{country}/{restArea?}/joinnow', [PageController::class, "joinNow"])->name('join-now')->where($where);
    Route::get('/{country}/joinnow', [PageController::class, "joinNow"])->name('join-now');

    // Blogs
    Route::get('/{country}/{restArea?}/blogs', [PageController::class, "blogs"])->name('blogs')->where($where);
    Route::get('/{country}/blogs', [PageController::class, "blogs"])->name('blogs');

    // Blog Details
    Route::get('/{country}/{restArea?}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail')->where($where);
    Route::get('/{country}/blog-details/{id}', [PageController::class, "blogsDetail"])->name('blogs-detail');

    // Product Details
    Route::get('/{country}/{restArea?}/product/{category}/{name}', [PageController::class, "productDetail"])->name('product-detail')->where($where);
    Route::get('/{country}/product/{category}/{name}', [PageController::class, "productDetail"])->name('product-detail');
});
