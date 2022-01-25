<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') ->name('home');

Route::get('/test', 'HomeController@home') ->name('test');

// Route::get('/', function () {
//     return view('pages.home');
// }) -> name('home');

// Route::get('/test', function () {
//     return view('pages.test');
// })->name('test');
