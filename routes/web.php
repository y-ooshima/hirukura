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
    return view('review.index');
});

// Route::get('/home', function () {
//     return view('review.index');
// });

Route::get('/show', function () {
    return view('review.show');
});

Route::get('/edit', function () {
    return view('review.edit');
});

Route::get('/create', function () {
    return view('review.create');
});

Route::get('/mypage', function () {
    return view('users.mypage');
});

Route::get('/users/profile', function () {
    return view('users.profile');
});

Route::get('/users/edit', function () {
    return view('users.edit');
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/re-enter', function () {
    return view('login.re-enter');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
