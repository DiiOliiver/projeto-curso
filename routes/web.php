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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth', 'prefix'=>'alunos'], function(){
	Route::get('/', 'AlunoController@index');
	Route::get('/add', 'AlunoController@create');
	Route::post('/', 'AlunoController@store');
	Route::get('/{id}', 'AlunoController@show');
	Route::get('/edit/{id}', 'AlunoController@edit');
	Route::put('{id}', 'AlunoController@update');
	Route::delete('{id}', 'AlunoController@destroy');
	Route::get('/{id}/pdf', 'AlunoController@gerarpdf');
});