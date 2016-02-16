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


//这表示创建了一个路由组。
//1. `'prefix' => 'user'` 表示这个路由组的 url 前缀是 /user
//中间那一行代码如果是`Route::get('/'` 那URL是 http://localhost/user
//如果是: `Route::get('login'` 那么URL就是 http://localhost/user/login
//2. `'namespace' => 'User'` 表示下面的 `UserController@index`
//不在 `\App\Http\Controllers\UserController@index`
//而在 `\App\Http\Controllers\User\UserController@index`，加上了一个命名空间的前缀。
Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
    Route::get('/', 'UserController@index');
});