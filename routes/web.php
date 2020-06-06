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

Route::get('/home', function () {
    return view('frontend.home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'FrontendController@home')->name('home');
Route::get('/book', 'FrontendController@book')->name('book');
// Route::get('/book', 'FrontendController@book')->name('book');
Route::get('/donation', 'FrontendController@donation')->name('donation');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/product', 'FrontendController@product')->name('product');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout');
Route::get('/payment', 'FrontendController@payment')->name('payment');
Route::get('/orderinfo', 'FrontendController@orderinfo')->name('orderinfo');
Route::get('/school', 'FrontendController@school')->name('school');
Route::get('/plustwo', 'FrontendController@plustwo')->name('plustwo');
Route::get('/alevel', 'FrontendController@alevel')->name('alevel');
Route::get('/comics', 'FrontendController@comics')->name('comics');
// Route::get('/home', 'HomeController@index');

// Route::group (['as'=> 'admin.'], function(){
//     Route::get('/admin', 'AdminController@index')->name('index');
// });
// controller le route banai dincha

Route::resource('/users','UserController');
Route::resource('/deposits','DepositController');
Route::resource('/contacts','ContactController');
Route::resource('/sells','SellController');
Route::resource('/donates','DonateController');
Route::resource('/books','BookController');



Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', 'AdminController@index')->name('index');
    Route::prefix('admin')->group(function () {
        // Route::resource('/books','BookController');
        Route::resource('/categories','CategoryController');
        Route::resource('/orders','OrderController');
        

    });
});