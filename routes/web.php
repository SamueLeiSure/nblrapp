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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
 * Test current time.
Route::get('/now', function () {
	return date('Y-m-d H:i:s');
});
*/

Route::resource('/serverinfo', 'ServerinfoController');
Route::resource('/file', 'FileController');
Route::resource('/tgsign', 'TgsignController');
Route::resource('/task', 'TaskController');
Route::post('/searchtask', 'TaskController@search');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/user', 'UserController@index');
	Route::get('/user/{id}/set', 'UserController@setboss');
	Route::get('/user/{id}/cancel', 'UserController@cancelboss');
});