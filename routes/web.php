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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'VisitorsController@index')->name('index');
Route::get('/{category}', 'VisitorsController@category')->name('category');
Route::get('/show/{id}', 'VisitorsController@show')->name('show.category');


Route::group(['middleware' => ['role:admin', 'auth'] , 'prefix' => 'admin'], function () {
	Route::get('/create', 'PostController@create')->name('posts.create');
    Route::get('posts/delete/{id}', 'PostController@destroy');
    Route::get('publish/{id}', 'PostController@publish');
    Route::resource('posts', 'PostController');
});

Route::group(['middleware' => ['role:subscriber', 'auth'] , 'prefix' => 'subscriber'], function () {
    Route::resource('comments', 'CommentsController');
});



