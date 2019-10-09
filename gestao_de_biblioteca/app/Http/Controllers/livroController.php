<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;

class livroController extends Controller
{
    public function buscarLivros(){
       $livros = livro::with('funcionario')->get();
       foreach($livros as $livro){
        echo $livro;//teste

        $funcionario=$livro->funcionario;
        echo"{$funcionario}",'<br><br>';//teste

    }


    }

    public function inseriLivro(){
        $dataForm=[
            'titulo'=>'zzzz',
            'autor'=>'dddd',
            'edicao'=>'1',
            'editora'=>'ddd',
            'pais'=>'1212',
        ];


    }

}
