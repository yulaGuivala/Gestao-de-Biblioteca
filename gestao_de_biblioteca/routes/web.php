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

Route::get('/', 'livroController@buscarLivros');
Route::get('/livro','livroController@buscarLivros');
Route::get('/estudantes', 'EstudanteController@listar');

//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'], function () {


    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/estudantes', 'EstudanteController@listar');
        //Route::get('/adicionar-estudantes', 'EstudanteController@adicionar');
    });
});
