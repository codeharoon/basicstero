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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/news', function () {
    return view('frontend.news');
})->name('news');

Route::get('/purchase', function () {
    return view('frontend.purchase');
})->name('purchase');

Route::get('/discount', function () {
    return view('frontend.discount');
})->name('discount');

Route::get('/faq', function () {
    return view('frontend.FAQ');
})->name('faq');

Route::get('/terms', function () {
    return view('frontend.ourterms');
})->name('terms');

Route::get('/innovations', function () {
    return view('frontend.innovation');
})->name('innovations');

Route::get('/results', function () {
    return view('frontend.labreports');
})->name('results');

Route::get('/reviews', function () {
    return view('frontend.review');
})->name('reviews');

Route::get('/contact', function () {
    return view('frontend.contactus');
})->name('contact');

Route::get('/oralsteroids', function () {
    return view('frontend.oralline');
})->name('oralsteroids');

Route::get('/injectableline', function () {
    return view('frontend.injectableline');
})->name('injectableline');

Route::get('/hgh', function () {
    return view('frontend.hghandpeptides');
})->name('hgh');

Route::get('/login', function () {
    return view('Userview.login');
})->name('login');


// login in user url

Route::get('/cart', function () {
    return view('Userview.cart');
})->name('cart');

Route::get('/profile', function () {
    return view('Userview.profile');
})->name('profile');


Route::get('/payment', function () {
    return view('Userview.payment');
})->name('payment');


Route::get('/order', function () {
    return view('Userview.orders');
})->name('order');

Route::get('/referals', function () {
    return view('Userview.referals');
})->name('referals');

Route::get('/changepassword', function () {
    return view('Userview.changepassword');
})->name('changepassword');