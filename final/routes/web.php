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

Route::get('people/about', function () {
    return view('about');
});

Route::get('people/suggest', function () {
    return view('create');
});

Route::resource('people','PersonController');