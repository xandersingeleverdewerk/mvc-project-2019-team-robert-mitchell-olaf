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

Route::get('/attractions/{attraction}/delete', 'attractionsController@delete')
    ->name('attractions.delete');
Route::resource('/attractions' , 'AttractionsController');

Route::get('/categories/{categorie}/delete', 'categoriesController@delete')
    ->name('categories.delete');
Route::resource('/categories', 'CategoriesController');
    

Route::get('/contact', function () {
    return view('contact');
});

