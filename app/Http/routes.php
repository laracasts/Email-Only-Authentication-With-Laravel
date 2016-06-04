<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Auth\AuthController@login');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('auth/token/{token}', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout');

Route::get('dashboard', function () {
    return 'Welcome, ' . Auth::user()->name;
})->middleware('auth');

