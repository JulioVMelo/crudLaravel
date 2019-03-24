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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BeerController@index');

Route::get('/cadastro', 'BeerController@add');

Route::post('/adicionar', 'BeerController@store');

Route::get('/deletar/{beer}', 'BeerController@destroy');

Route::get('/editar/{beer}', 'BeerController@edit');

Route::get('/atualizar/{beer}', 'BeerController@update');
