<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('fruitables/index');
});


Route::get('/index.html', function () {
    return view('fruitables/index');
});

Route::get('/cart.html', function () {
    return view('fruitables/cart');
});

Route::get('/contact.html', function () {
    return view('fruitables/contact');
});

Route::get('/shop.html', [ProductController::class, 'index']);


Route::get('/testimonial.html', function () {
    return view('fruitables/testimonial');
});

Route::get('/shop-detail.html', function () {
    return view('fruitables/shop-detail');
});

Route::get('/chackout.html', function () {
    return view('fruitables/chackout');
});

Route::get('/404.html', function () {
    return view('fruitables/404');
});