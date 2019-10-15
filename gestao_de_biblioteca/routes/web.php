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

/*
Route::get('/', function () {
    return view('user.catalogo');
});*/

//Route::get('/', 'livroController@buscarLivros');
Route::get('/livro','livroController@listar');
Route::get('/estudantes', 'estudanteController@listar');
Route::get('/funcionario', 'funcionarioController@listar');
Route::get('/addfuncionario', 'funcionarioController@create');
Route::post('/stfuncionario', 'funcionarioController@store');


//Rotas para viesws dos users
Route::group(['prefix' => 'inicio'], function () {
    Route::group(['prefix' => 'minha-conta'], function () {
        Route::get('/registar', 'EstudanteController@registar'); //redireciona para formulario de cadastro
        Route::get('/{id}/perfil', 'EstudanteController@showPerfil'); //Vizualiza perfil de umestudante
        Route::post('/store', 'EstudanteController@store'); //Armazena dados de Estudanteu
    });
    Route::get('/catalogo', 'LivroController@listar');
});


//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'], function () {
    Route::group(['prefix' => '/usuarios'], function () {
        Route::get('/estudantes', 'EstudanteController@show'); //lista estudasntes no admin
        //Route::post('/apagar', 'EstudanteController@destroy'); //exclui um estudante na BD
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

