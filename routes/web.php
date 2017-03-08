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

Route::resource('/answer','user\AnswerController');

Route::resource('/login','user\LoginController');

Route::resource('/register','user\RegisterController');

Route::get('/imagescode/{tmp}','user\RegisterController@imagesCode');

Route::resource('/family','user\BlogListController');

Route::resource('/download','user\DownLoadController');

Route::resource('/docs','user\DocsController');

Route::resource('/articles', 'user\PhotoController');