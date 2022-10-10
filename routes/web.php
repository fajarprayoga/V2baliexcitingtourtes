<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')
    ->name('home')
    ->middleware('cekverifiemail');

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail')
    ->middleware('cekverifiemail');
Route::post('/detail/rate', 'DetailController@rate')
    ->name('detail.rate');
    // ->middleware('cekverifiemail');

Route::get('/bookperday', 'BookPerDayController@index')
    ->name('BookPerDay.index')
    ->middleware('cekverifiemail');
// Route::post('/bookperday/checkout/{id}', 'BookPerDayController@process')
//     ->name('BookPerDay.process')
//     ->middleware(['auth','verified']);

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);


Route::get('/contactus', 'ContactUsController@index')
    ->name('contactUs');
Route::post('/contactus/send', 'ContactUsController@send')
    ->name('contactUs.send');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');


        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::get('travel-gallery/{id}', 'GalleryController@travel_gallery')->name('travel_gallery');
        Route::resource('transaction', 'TransactionController');
        Route::resource('user', 'UserController');
    });
    
Route::get('lang/{language}', 'LocalizationController@switch')
    ->name('localization.switch');    

Auth::routes(['verify' => true]);

// Midtrans
Route::post('/midtrans/callback', 'MidtransController@notificationHandler');
Route::get('/midtrans/finish', 'MidtransController@finishRedirect');
Route::get('/midtrans/unfinish', 'MidtransController@unfinishRedirect');
Route::get('/midtrans/error', 'MidtransController@errorRedirect');
