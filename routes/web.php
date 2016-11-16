<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('zetoas/home');
});
Route::get('/galery', function () {
    return view('zetoas/galery');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['web']],function(){
	Route::resource('/','PHomeController');
    Route::resource('/post','PPostController');
});
