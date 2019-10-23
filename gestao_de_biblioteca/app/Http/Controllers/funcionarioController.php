<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\funcionario;
use App\Models\user;
use App\Models\endereco;
use App\Models\ficheiro;


class funcionarioController extends Controller
{
    private $user_controller;
    private $endereco_controller;
    private $funcionario;
    private $ficheiro_controller;

    public function __construct(UserController $user_controller,
                        EnderecoController $endereco_controller,FicheiroController $ficheiro_controller) {
        $this->ficheiro_controller = $ficheiro_controller;
        $this->user_controller = $user_controller;
        $this->endereco_controller = $endereco_controller;
        $this->funcionario = new Funcionario(); 
    }


    public function create() {

        return view('admin.adicionar-funcionario');

    }


    public function store(Request $req){
        // $dataForm = $request->all();

        

       if($req->mail && $req->usuario) {
            $user = new User();
            $end = new Endereco();
            $ficheiro = new Ficheiro();

            $foto = $req->file('foto');
            $ficheiro->nome = "profile.png"; //caso nao tenha imagem vai guardar a imagem padrao
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
            

            $user->name = $req->usuario;
            $user->email = $req->mail;
            $user->password = $req->senha;
            $user->ficheiro_id = $fich_id;
            $user_id = $this->user_controller->store($user);
            

            $end->distrito = 'Kamubukhana';//$req->distrito;
            $end->bairro = 'Bagamoyo';//$req->bairro;
            $end->rua ='5538'; //$req->rua;
            $end->casa = '38';//$req->casa;
            $end_id = $this->endereco_controller->store($end);
            

            funcionario::create([
                'nome'=> $req->nome." ".$req->apelido,
                "endereco_id" => $end_id,
                "user_id" => $user_id
            ]);

       }
       return redirect('sgb-admin/usuarios/funcionario')->with('message', 'Pessoa cadastrada com sucesso!');
    }

    public function listar() {

        $listaFunc = funcionario::all();
        return view('admin.lista-funcionario',['funcionario' => $listaFunc]);

    }

    public function destroy($id) {
        $this->funcionario = $this->getFuncionario($id);
        $funcionario = $this->funcionario->delete();
        return \Response::json($funcionario);
    }

    private function getFuncionario($id) {
        return $this->funcionario->find($id);
    }

    public function login() {

        return view('admin.login');

    }

    public function entrar(Request $req) {

        $lista = funcionario::all()->user();

        foreach ($lista as $fun){

            if ($req->nome == $func->name && $req->senha == $func->password) {
                echo "Folege";
            } 
        }
        
        
        return view();

    }
}
