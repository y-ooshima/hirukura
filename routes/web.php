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
});

Route::get('/home', function () {
    return view('review.index');
});

Route::get('/show', function () {
    return view('review.show');
});

Route::get('/edit', function () {
    return view('review.edit');
});

Route::get('/create', function () {
    return view('review.create');
});
