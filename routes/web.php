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

// redirect route
Route::redirect('/' , 'login');


// login

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@auth')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

// gerai

Route::get('/gerai/{id}/auth', 'AuthController@getCode');
Route::post('/gerai/{id}/auth', 'AuthController@code')->name('postCode');
Route::get('/gerai', 'GeraiController@index'); 
Route::get('/gerai/register', 'GeraiController@create');
Route::post('/gerai/register', 'GeraiController@register')->name('register');
Route::get('/gerai/{user}', 'GeraiController@show'); //belum

// catalog belum

Route::get('/catalog', 'CatalogController@guest');
Route::get('/catalog/cari', 'CatalogController@cari')->name('cari');
Route::get('/catalog/{id}/checkout', 'CatalogController@checkout')->name('checkout');
Route::post('/catalog/{id}/checkout', 'CatalogController@checkoutstore');


// ADMIN
Route::prefix('admin')->group(function(){
    Route::redirect('/' , '/admin/dashboard');
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('invoices', 'AdminController@invoices')->name('admin.invoices');
    Route::get('customer-message', 'AdminController@customer')->name('admin.customer');
    Route::resource('profile', 'GeraiController')->except([
        'create' , 'store', 'show'
    ]);
    Route::resource('catalog', 'CatalogController');
});




