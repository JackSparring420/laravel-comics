<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') ->name('home');

Route::get('/test', 'HomeController@test') ->name('test');

// Route::get('/', function () {
//     return view('pages.home');
// }) -> name('home');

// Route::get('/test', function () {
//     return view('pages.test');
// })->name('test');
