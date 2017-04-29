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
////
////Route::resource('depertment', 'DepertmentController@index');
//Route::get('/home', 'DepertmentController@index');
//Auth::routes();
////
Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('/home/teacher/{id}', 'TeacherController@getTeacher');
Auth::routes();
Route::post('/posts', 'DepertmentController@show');
Auth::routes();
//Route::get('/post/{id}', 'TeacherController@show');
//
//Route::get('/home', 'HomeController@index');
//Route::get('/teachers/{id}', 'TeacherController@getTeachers');
