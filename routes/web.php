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

//Route::get('/', function () {
//    return view('index');
//})->name('index');

Route::get('/', 'LandingController@index')->name('index');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

// Route::get('/config-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return '<h1>Clear Config cleared</h1>';
// });

Route::get('/login', function () {
    return view('home');
});


Auth::routes();

Route::post('lead/create', 'LeadController@create');

Route::post('lead/create2', 'LeadController@create2')->name('create2');

Route::get('category', 'CategoryController@index')->name('category');

Route::get('home', 'HomeController@index')->name('home');

// галлерея:

Route::get('home/gallery', 'GalleryController@index')->name('gallery');

Route::get('home/gallery/create', 'GalleryController@create')->name('gallery.create');

Route::post('home/gallery/upload', 'GalleryController@upload')->name('gallery.upload');

Route::delete('home/gallery/{id}/destroy', 'GalleryController@destroy')->name('gallery.destroy');

// цвета:

Route::get('home/color', 'ColorController@index')->name('color');

Route::get('home/color/create', 'ColorController@create')->name('color.create');

Route::post('home/color/upload', 'ColorController@upload')->name('color.upload');

Route::delete('home/color/{id}/destroy', 'ColorController@destroy')->name('color.destroy');

Route::get('home/color/edit', 'ColorController@edit')->name('color.edit');

Route::post('home/color/{id}/update', 'ColorController@update')->name('color.update');

// Отзывы:

Route::get('home/review', 'ReviewController@index')->name('review');

Route::get('home/review/create', 'ReviewController@create')->name('review.create');

Route::post('home/review/upload', 'ReviewController@upload')->name('review.upload');

Route::delete('home/review/{id}/destroy', 'ReviewController@destroy')->name('review.destroy');

Route::get('home/review/edit', 'ReviewController@edit')->name('review.edit');

Route::post('home/review/{id}/update', 'ReviewController@update')->name('review.update');

// Акции:

Route::get('home/sale', 'SaleController@index')->name('sale');

Route::get('home/sale/create', 'SaleController@create')->name('sale.create');

Route::post('home/sale/upload', 'SaleController@upload')->name('sale.upload');

Route::delete('home/sale/{id}/destroy', 'SaleController@destroy')->name('sale.destroy');

Route::get('home/sale/edit', 'SaleController@edit')->name('sale.edit');

Route::post('home/sale/{id}/update', 'SaleController@update')->name('sale.update');

//Основные настройки


Route::get('home/main', 'MainController@index')->name('main');

Route::get('home/main/edit', 'MainController@edit')->name('main.edit');

Route::post('home/main/{id}/update', 'MainController@update')->name('main.update');


// Цены

Route::get('home/price', 'PriceController@index')->name('price');

Route::get('home/price/edit', 'PriceController@edit')->name('price.edit');

Route::post('home/price/{id}/update', 'PriceController@update')->name('price.update');