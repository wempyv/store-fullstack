<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories','CategoryController@index')->name('categories');
Route::get('/details/{id}','DetailController@index')->name('detail');
Route::get('/cart','CartController@index')->name('cart');

Auth::routes();
