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
    return view('home');
});

Route::get('/about-us', function () {
    return view('company.about');
});

Route::get('/contact-us', function () {
    return view('company.contact');
});

Route::get('/products', function () {
    return view('company.products');
});

Route::get('policy/privacy', function () {
    return view('policy.privacy');
});

Route::get('policy/disclaimer', function () {
    return view('policy.disclaimer');
});

Route::get('policy/terms', function () {
    return view('policy.terms');
});

Route::post('mail/contact','HomeController@store');