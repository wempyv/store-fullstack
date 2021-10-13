<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories','CategoryController@index')->name('categories');


Auth::routes();
