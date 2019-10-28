<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\livro;
use App\Models\ficheiro;
use App\Models\categoria;
use App\Models\estudante;
use Request as Requisicao;
use DB;
class livroController extends Controller
{
    private $ficheiro_controller;
    private $categoria_controller;
    private $exemplar_controller;

    public function __construct(CategoriaController $categoria_controller,FicheiroController $ficheiro_controller,
                                exemplarController $exemplar_controller) {
        $this->ficheiro_controller = $ficheiro_controller;
        $this->categoria_controller=$categoria_controller;
        $this->exemplar_controller=$exemplar_controller;
        $this->livro = new Livro();
    }
    public function listar (livro $livros){

       $livros = livro::with('categoria','ficheiro')->get();
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
        $ficheiro = new Ficheiro();

        $foto = $request->file('img');
        if ($foto != null) {
            $extensao = $foto->getClientOriginalExtension();

            //para evitar que ficheiro com mesmo nome entrem em conflito, o nome original do ficheiro e trocado
            Storage::disk('public')->put($foto->getFilename() . '.' . $extensao, \File::get($foto));
            $ficheiro = new ficheiro();
            $ficheiro->nome = $foto->getFilename() . '.' . $extensao;
            $ficheiro->mime = $foto->getClientMimeType();
            $ficheiro->nome_original = $foto->getClientOriginalName();
        }
        $fich_id = $this->ficheiro_controller->store($ficheiro);

        //echo $fich_id;

        $categoria = new Categoria();
        $categoria->nome=$request->categoria;

        $cat_id = $this->categoria_controller->buscar($categoria);
        $func_id =  Requisicao::cookie('Id');

        $livro=Livro::create([
                    'titulo'=>$request->titulo,
                    'autor'=>$request->autor,
                    'editora'=>$request->editora,
                    'edicao'=>$request->edicao,
                    'pais'=>$request->pais,
                    'ano'=>$request->ano,
                    'funcionario_id'=>$func_id,
                    'ficheiro_id'=>$fich_id,
                    'categoria_id'=>$cat_id
                ]);

        $this->exemplar_controller->store($livro->id,$request->quantidade);
        return redirect('/sgb-admin/livros/adicionar-livro')->with('mensagem', 'Livro cadastro com sucesso!');

    }

    //Requisitar livros(estudantes)
    public function requisitar($livro_id ,$estudante_id){
        $livro=livro::find($livro_id);
        $livro->estudantes()->attach($estudante_id,['estado'=>'Pendente']);

        return redirect()->back()->with('msgSucesso', "'Requisicao feita com sucesso'");
    }

    //retorna uma lista de requisicoes de livros
    public function listaRequisicao(){

        $livros = DB::table('livros','estudantes','estudate_as_livro')
                ->select('livros.id','livros.titulo','E.nome','E.numero','p.data','p.estado','E.id as idEst')
                ->join('estudate_as_livro as p', 'livros.id', '=', 'p.livro_id')
                ->join('estudantes as E', 'E.id', '=', 'p.estudante_id')
                ->get();

        return view('admin.lista-requisicoes',['requisicoes'=>$livros]);
    }

    //confirmacao da requisicao do livrofuncionarios()
    public function confirma($id, $idEst){
        $livro=Livro::where('id',$id)->with('estudantes')->get()->first();
        $livro->estudantes()->updateExistingPivot($idEst,array('estado'=>'Confirmado'),false);
        return redirect()->back();
    }
}
