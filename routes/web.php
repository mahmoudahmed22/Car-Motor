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
use App\Http\Controllers\carController;
Route::get('/','HomeController@index');


Route::get('/createCategory','categoryController@create');
Route::post('/createCategory','categoryController@store');
Route::get('/category ','categoryController@index');
Route::get('/category/{name} ','categoryController@show');



Route::get('/contact','HomeController@contact');



Route::get('/createcar','carController@create');
Route::post('/createcar','carController@store');
Route::get('/car','carController@index');

Route::get('/edit/{id}','carController@edit');
Route::post('/update/{id}','carController@update');

Route::get('/delete/{id}','carController@destroy');













Route::get('/asd', function () {
    return view('welcome');
});
//==================================================================
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
