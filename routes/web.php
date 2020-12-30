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

Route::get('/', 'PageController@index');
Route::get('/watch/{uuid}', 'PageController@watch');
Route::get('/login', function () {
    return view('site/login');
});
Route::get('/register', function () {
    return view('site/signup');
});
Route::post('/register', 'UserController@register');

Route::get('/account', 'PageController@account');
Route::get('/admin/category', 'CategoryController@create');
Route::post('/admin/add-category', 'CategoryController@store');

Route::get('/10-upload', 'PostController@upload');
Route::post('/10-upload', 'PostController@store')->name('upload');
Route::post('/login', 'UserController@login')->name('login');
Route::post('/categories', 'PostController@index')->name('getCategories');
Route::get('/logout', 'UserController@logout')->name('logout');
