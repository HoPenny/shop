<?php

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

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('/', 'SiteController@index');
    Route::get('/about', 'SiteController@about');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/blog', 'SiteController@blog');
    Route::get('/contact', 'SiteController@contact');

    //Penny 2022/11/27 add
    Route::get('/blog-details', 'SiteController@blog_details');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/checkout', 'SiteController@checkout');
    Route::get('/confirmation', 'SiteController@confirmation');
    Route::get('/contact', 'SiteController@contact');
    Route::get('/elements', 'SiteController@elements');
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/login', 'SiteController@login');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
