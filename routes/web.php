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

Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/','HomeController@index');
    Route::get('/veiculos','VeiculosController@index');
    Route::get('/veiculos/formulario','VeiculosController@novo');
    Route::get('/veiculos/{id}/editar','VeiculosController@editar');
    Route::get('/veiculos/{id}/deletar','VeiculosController@deletar');
    Route::post('/veiculos/salvar', 'VeiculosController@salvar');
    Route::post('/veiculos/atualizar/{id}', 'VeiculosController@atualizar');
    Auth::routes();    
});


