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

// Route::get('/', function () {
//     return view('layouts.layouts');
// });

//AUTH
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('address')->group(function() {
 Route::get('list', 'Address\Controller\AddressController@index')->name('address.list');
 Route::get('add', 'Address\Controller\AddressController@create')->name('address.add');
 Route::post('create', 'Address\Controller\AddressController@store')->name('address.insert');
 Route::get('show/{id}', 'Address\Controller\AddressController@show')->name('address.show');
 Route::get('edit/{id}', 'Address\Controller\AddressController@edit')->name('address.edit');
 Route::post('update/{id}', 'Address\Controller\AddressController@update')->name('address.update');
 Route::get('delete/{id}', 'Address\Controller\AddressController@destroy')->name('address.delete');
});

 Route::post( '/get/states', 'Load\Controller\LoadController@city' )->name( 'loadCity' );
 Route::post( '/get/province', 'Load\Controller\LoadController@province' )->name( 'loadProvince' );
