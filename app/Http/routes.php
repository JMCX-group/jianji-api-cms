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


/*
 * 创建一个路由组user:
 * prefix：表示这个路由组的 url 前缀
 * 在该路由组里Route::get('/'` ，URL对应的是 http://localhost/user
 * `Route::get('alldata'` 那URL就是 http://localhost/user/alldata
 * namespace：命名空间。表示 `UserController@index`不在 `\App\Http\Controllers\`下，而在 `\App\Http\Controllers\User\`下。
 * UserController@index：前面为控制器，后面是调用控制器中的方法
 */
Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
    Route::get('/', 'UserController@index');
    Route::get('alldata', 'UserController@showAllUser');
});


/*
 * 创建一个路由组:api
 */
Route::group(['prefix' => 'api', 'namespace' => 'api'], function () {
    Route::get('/', 'TestController@index'); //测试专用
    Route::post('test', 'TestController@test');
});