<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;

class livroController extends Controller
{
    public function listar (livro $livros){

       $livros = livro::with('categoria')->get();
       return view('user.catalogo',['livros' => $livros]);
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
