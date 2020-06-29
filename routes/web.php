<?php
use App\Book;

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
    return view('frontend.home')->with(['books' => \App\Book::all()]);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
Route::resource('/cart', 'CartController');
Route::get('/cart/addItem/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/home', 'FrontendController@home')->name('home');
Route::get('/book', 'FrontendController@book')->name('book');
Route::get('/donation', 'FrontendController@donation')->name('donation');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/product', 'FrontendController@product')->name('product');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout');
Route::get('/payment', 'FrontendController@payment')->name('payment');
Route::get('/orderinfo', 'FrontendController@orderinfo')->name('orderinfo');
Route::get('/bookscategory/{id}', 'FrontendController@bookscategory')->name('bookscategory');
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


// admin routes
Route::group(['middleware' => 'auth'], function (){
    // index.blade.php->admin ko index 
    Route::get('/admin', 'AdminController@index')->name('index');
    Route::prefix('admin')->group(function () {
        // Route::resource('/books','BookController');
        Route::resource('/categories','CategoryController');
        Route::resource('/orders','OrderController');
        

    });
});