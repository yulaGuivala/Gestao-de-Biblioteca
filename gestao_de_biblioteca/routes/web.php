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

use App\Http\Controllers\livroController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/', function () {
    return view('admin.adicionar-livro');

});
/*
Route::get('/', function () {
    return view('user.catalogo');
});*/

//Route::get('/', 'livroController@buscarLivros');
//Route::get('/livro','livroController@listarAdmin');
//Route::get('/funcionario', 'funcionarioController@listar');
//Route::get('/addfuncionario', 'funcionarioController@create');


//Rotas para viesws dos users
Route::group(['prefix' => 'inicio'], function () {
    Route::group(['prefix' => 'minha-conta'], function () {
        Route::get('/registar', 'EstudanteController@registar'); //redireciona para formulario de cadastro
        Route::get('/{id}/perfil', 'EstudanteController@showPerfil'); //Vizualiza perfil de umestudante
        Route::post('/store', 'EstudanteController@store'); //Armazena dados de Estudanteu
        Route::post('/update', 'EstudanteController@update'); //Armazena dados de Estudanteu
    });
    Route::get('/catalogo', 'LivroController@listar');
    Route::get('/contacto', 'MensagemController@index');
    Route::get('/contacto/store', 'MensagemController@store');
});


//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'], function () {
    Route::group(['prefix' => '/usuarios'], function () {
        Route::get('/estudantes', 'EstudanteController@show'); //lista estudasntes no admin
        Route::get('/apagar/{id}', 'EstudanteController@destroy'); //exclui um estudante na BD
    });

    Route::group(['prefix' => 'livros'], function () {
        Route::get('lista','livroController@listarAdmin');
    });
    Route::group(['prefix' => 'mensagens'], function () {
        Route::get('/', 'MensagemController@showAll');
        Route::get('/show/{id}', 'MensagemController@show');
        Route::get('/apagar/{id}', 'MensagemController@destroy');
    });

});
//Route::get('/funcionario', 'funcionarioController@listar');
//Route::get('/addfuncionario', 'funcionarioController@create');

Route::group(['prefix' => 'sgb-admin'], function () {
    Route::post('/stfuncionario', 'funcionarioController@store');
    Route::get('/index', 'userController@login_admin');
    Route::group(['prefix' => '/usuarios'], function () {
        Route::get('/funcionario', 'funcionarioController@listar');
        Route::get('/adicionar-funcionario', 'funcionarioController@create');
        Route::post('/gravar-funcionario', 'funcionarioController@store');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
