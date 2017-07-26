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
    return view('welcome');
})->name('/');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('cart', 'ShoppingController@getCart')->middleware('auth');
Route::post('cart', 'ShoppingController@postCart')->middleware('auth');
Route::get('pay', 'ShoppingController@getPay')->middleware('auth');
Route::get('payementOK', 'ShoppingController@payementOK')->middleware('auth');
Route::get('shopping', 'ShoppingController@getShoppingPage')->name('shopping');
Route::get('add/{id}', 'ShoppingController@addToCart')->middleware('auth');
Route::get('/download', 'ShoppingController@DownloadCV');
Route::get('contact','ShoppingController@getContact');
Route::post('contact','ShoppingController@SendMail');

Route::get('emptyCart', 'ShoppingController@emptyCart')->middleware('auth');


Auth::routes();

