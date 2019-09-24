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
    return view('index');
});
Route::get('/login', function () {
    return view('site/login');
});
Route::get('/register', function () {
    return view('site/signup');
});
Route::get('/10-upload', function () {
    return view('user/upload');
});
Route::post('/categories', 'PostController@index')->name('getCategories');
Route::post('/10-upload', 'PostController@store')->name('upload');
Route::get('/logout', 'UserController@logout')->name('logout');
