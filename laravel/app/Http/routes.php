<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('userinfo','LaravelController@userinfo');
Route::get('userinfo1','LaravelController@userinfo1');
Route::get('userinfo2','LaravelController@userinfo2');
Route::get('index','CurdController@index');
Route::post('insert','CurdController@insert');
Route::get('show','CurdController@show');
Route::get('del','CurdController@del');
Route::get('first','CurdController@first');
Route::post('update','CurdController@update');
Route::post('search','CurdController@search');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
