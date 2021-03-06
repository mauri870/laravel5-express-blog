<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Blog'], function () {
    Route::get('/', ['as'=>'blog.index', 'uses'=>'PagesController@index']);
    Route::get('/posts/{slug}', ['as'=>'blog.post', 'uses'=>'PagesController@post']);
});
