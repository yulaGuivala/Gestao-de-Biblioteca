<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;

class livroController extends Controller
{
    public function buscarLivros(livro $livros){
       
       echo $livros->all();
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
