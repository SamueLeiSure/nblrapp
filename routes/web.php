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

Route::get('/file', 'FileController@show');
Route::post('/upload', 'FileController@upload');
Route::get('/viewpdf', 'FileController@viewpdf');