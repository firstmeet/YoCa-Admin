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

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('home', 'HomeController@index');

Route::group(['middleware' => ['web'],'namespace'=>'Admin'], function () {



    Route::get('admin/login', 'AuthController@getLogin');
    Route::post('admin/login', 'AuthController@postLogin');
    Route::get('admin/register', 'AuthController@getRegister');
    Route::post('admin/register', 'AuthController@postRegister');
    Route::get('admin', 'IndexController@index');

});


