<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('register/check','Auth\RegisterController@check')->name('api-register-check');
route::get('provinces','API\LocationController@provinces')->name('api-provinces');
route::get('regencies/{provinces_id}','API\LocationController@regencies')->name('api-regencies');
