<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;
use App\Models\ficheiro;
use App\Models\categoria;

class livroController extends Controller
{
    private $ficheiro_controller;
    private $categoria_controller;

    public function __construct(CategoriaController $categoria_controller,FicheiroController $ficheiro_controller) {
        $this->ficheiro_controller = $ficheiro_controller;
        $this->categoria_controller=$categoria_controller;
        $this->livro = new Livro();
    }
    public function listar (livro $livros){

       $livros = livro::with('categoria')->get();
       return view('user.catalogo',['livros' => $livros]);
    }

    public function create(){

        return view('admin.adicionar-livro');
    }
    public function listarAdmin (livro $livros){

        $livros = livro::with('categoria')->get();
        return view('admin.lista-livro',['livros' => $livros]);
     }

    public function store(Request $request){
        $dataForm=$request->except('_token');

        //echo dd($dataForm);

       /* $foto = $request->file('foto');
        $extensao = $foto->getClientOriginalExtension();
        Storage::disk('public')->put($foto->getFilename() . '.' . $extensao, \File::get($foto));
        $ficheiro = new ficheiro();
        $ficheiro->nome = $foto->getFilename() . '.' . $extensao;
        $ficheiro->mime = $foto->getClientMimeType();
        $ficheiro->nome_original = $foto->getClientOriginalName();
        $fich_id = $this->ficheiro_controller->store($ficheiro);*/

        $categoria = new Categoria();
        $categoria->nome=$request->categoria;

        //var_dump($request->all());
        //echo $categoria->nome;
        $cat_id = $this->categoria_controller->buscar($categoria);

        Livro::create([
            'titulo'=>$request->titulo,
            'autor'=>$request->autor,
            'editora'=>$request->editora,
            'edicao'=>$request->edicao,
            'pais'=>$request->pais,
            'ano'=>$request->ano,
            'funcionario_id'=>2,
            //'ficheiro_id'=>$fich_id,
            'categoria_id'=>$cat_id
        ]);


    }
}
