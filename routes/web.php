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

// Route::get('/create', function () {
//     return view('review.create');
// });

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');//->name('posts.create')
Route::post('/posts', 'PostController@store');//->name('posts.store')
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');

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

Route::get('/mypage', 'UserController@mypage')->name('mypage');
Route::get('/mypage/profile', 'UserController@edit')->name('mypage.edit');
Route::put('users/mypage', 'UserController@update')->name('mypage.update');
Route::get('users/mypage/password/edit', 'UserController@edit_password')->name('mypage.edit_password');
Route::put('users/mypage/password', 'UserController@update_password')->name('mypage.update_password');
Route::delete('users/mypage/delete', 'UserController@destroy')->name('mypage.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/article/delete', 'UserController@delete')->name('article_delete');

//ajax用
Route::post('/searching', 'PostController@locations_search');