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
//use Symfony\Component\Routing\Route;
//use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

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

Route::get('/', function () {
    return view('user.index');
});

Route::get('/inicio', function () {
    return view('user.index',['sobre' => true]);
});

//Rotas para viesws dos users
Route::group(['prefix' => 'inicio'], function () {
    Route::group(['prefix' => 'minha-conta'], function () {
        Route::get('/registar', 'EstudanteController@registar')->name('registrarE'); //redireciona para formulario de cadastro
        Route::get('/login', 'EstudanteController@index')->name('loginE');
        Route::get('/logout', 'EstudanteController@sair')->name('sairE');
        Route::get('/{id}/perfil', 'EstudanteController@showPerfil'); //Vizualiza perfil de umestudante
        Route::post('/entrar', 'EstudanteController@entrar')->name('entrarE');
        Route::post('/store', 'EstudanteController@store'); //Armazena dados de Estudanteu
        Route::post('/update', 'EstudanteController@update'); //Armazena dados de Estudanteu
    });
    Route::get('/contacto', 'MensagemController@index')->name('contacto');

    Route::post('/adicionar-contacto', 'MensagemController@store')->name('storeMensagem');

    Route::get('/contacto/store', 'MensagemController@store');
    Route::group(['prefix' => '/livros'], function () {
        Route::get('/catalogo', 'LivroController@listar')->name('catalogo');
        Route::get('/requisicao/{id}/{id2}', 'LivroController@requisitar')->name('requisicao');
    });

});


//Rotas para views do admin
Route::group(['prefix' => 'sgb-admin'],function () {
    Route::get('/login','funcionarioController@login');//Routa de login
    Route::post('/entrar','funcionarioController@entrar');//Verifica se usuario existe
    Route::middleware(['auth.role'])->group( function () {//middleware de login redireciona ususrios nao autenticados ao login
        Route::group(['prefix' => '/usuarios'], function () {
            
            Route::get('/estudantes', 'EstudanteController@show'); //lista estudasntes no admin

            Route::get('/apagar/{id}', 'EstudanteController@destroy'); //exclui um estudante na BD

            Route::get('/funcionario', 'funcionarioController@listar');//lista funcionarios no admin
            Route::get('/adicionar-funcionario', 'funcionarioController@create');//formulario de registo de funcionario no admin
            Route::post('/gravar-funcionario', 'funcionarioController@store');//gravar funcionario no admin
            Route::get('/apagar-func/{id}', 'funcionarioController@destroy'); //exclui um funcionario na BD
<<<<<<< HEAD
            Route::get('/perfil','funcionarioController@perfil');//Mostra perfil do usuario que esta autenticado
            Route::get('/sair','funcionarioController@sair');//Destroy os cookies de autenticacao 
            Route::post('/update','funcionarioController@update');
            });
            
        
        
        Route::group(['prefix' => 'livros'], function () {
            Route::get('lista','livroController@listarAdmin');
            Route::post('store', 'livroController@store');
            Route::get('adicionar-livro','livroController@create');
        });
        Route::group(['prefix' => 'mensagens'], function () {
            Route::get('/', 'MensagemController@showAll');
            Route::get('/show/{id}', 'MensagemController@show');
            Route::get('/apagar/{id}', 'MensagemController@destroy');
        });
    });
=======
            Route::get('/perfil','funcionarioController@perfil');
            Route::get('/sair','funcionarioController@sair');
        });

    });
    Route::get('/index', 'userController@login_admin');
    Route::group(['prefix' => 'livros'], function () {
        Route::get('/lista','livroController@listarAdmin');
        Route::post('/store', 'livroController@store');
        Route::get('/adicionar-livro','livroController@create');
        Route::get('/requisicoes','livroController@listaRequisicao');
        Route::get('/confirmar-requisicao/{id}','livroController@confirma');

    });
    Route::group(['prefix' => 'mensagens'], function () {
        Route::get('/', 'MensagemController@showAll');
        Route::get('/show/{id}', 'MensagemController@show');
        Route::get('/apagar/{id}', 'MensagemController@destroy');
    });

>>>>>>> 470bf2b8367797b366fc5a0c863477f8344463ec
});
//Route::get('/funcionario', 'funcionarioController@listar');
//Route::get('/addfuncionario', 'funcionarioController@create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
