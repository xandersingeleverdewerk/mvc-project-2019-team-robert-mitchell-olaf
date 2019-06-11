<?php

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('park/restaurants/{restaurant}/delete', 'RestaurantsController@delete')
    ->name('park.restaurants.delete');
Route::resource('/park/restaurants', 'RestaurantsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
