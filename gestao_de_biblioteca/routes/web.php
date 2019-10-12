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

//Rotas para viesws dos users
Route::group(['prefix' => 'inicio'], function () {
    Route::group(['prefix' => 'minha-conta'], function () {
        Route::get('/registar', 'EstudanteController@registar'); //redireciona para formulario de cadastro
        Route::post('/store', 'EstudanteController@store');
    });
});


//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'], function () {
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/estudantes', 'EstudanteController@listar'); //redireciona para lists de estudasntes no admin
        //Route::get('/adicionar-estudantes', 'EstudanteController@adicionar');
    });
});

