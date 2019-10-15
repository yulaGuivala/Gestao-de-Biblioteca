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

Route::get('/', 'livroController@buscarLivros');
<<<<<<< Updated upstream
=======
Route::get('/livro','livroController@buscarLivros');
Route::get('/estudantes', 'estudanteController@listar');
Route::get('/funcionario', 'funcionarioController@listar');
Route::get('/addfuncionario', 'funcionarioController@create');
Route::post('/stfuncionario', 'funcionarioController@store');
Route::get('/index', 'Controller@inicio');



//Rotas para viesws dos users
Route::group(['prefix' => 'inicio'], function () {
    Route::group(['prefix' => 'minha-conta'], function () {
        Route::get('/registar', 'EstudanteController@registar'); //redireciona para formulario de cadastro
        Route::post('/store', 'EstudanteController@store');
    });
});


//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'], function () {
    Route::group(['prefix' => '/usuarios'], function () {
        Route::get('/estudantes', 'EstudanteController@listar');
        Route::get('/adicionar-estudantes', 'EstudanteController@adicionar');
   		Route::group(['prefix' => 'usuarios'], function () {
            Route::get('/estudantes', 'EstudanteController@listar'); //redireciona para lists de estudasntes no admin
            //Route::get('/adicionar-estudantes', 'EstudanteController@adicionar');
        });
    });
});

Route::group(['prefix' => 'sgb-admin'], function () {
    Route::group(['prefix' => '/usuarios'], function () {
        Route::get('/funcionario', 'funcionarioController@listar');
        Route::get('/adicionar-funcionarios', 'funcionarioController@adicionar');
   		Route::group(['prefix' => 'usuarios'], function () {
               return "Folege";
            //Route::get('/funcionario', 'FuncionariosController@listar'); //redireciona para lists de funcionarios no admin
            //Route::get('/adicionar-estudantes', 'EstudanteController@adicionar');
        });
    });
});
>>>>>>> Stashed changes

Route::get('/livro','livroController@buscarLivros');
