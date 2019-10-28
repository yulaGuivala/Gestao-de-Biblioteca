<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\funcionario;
use App\Models\user;
use App\Models\endereco;
use App\Models\ficheiro;
use Request as Requisicao;
use Symfony\Component\HttpFoundation\Cookie;


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

    public function index() {

        return view('admin.index');
    }

    public function entrar(Request $req) {

        $lista = user::all();
        $lista2 = funcionario::all();
        
        foreach ($lista2 as $ft) {

            foreach ($lista as $func){
               
                if ($func->id == $ft->user_id) {
                    
                    if ($req->nome == $func->name || $req->nome == $func->email){
                    
                        if ($req->senha == $func->password) {

                            return redirect('/sgb-admin/index')
                            ->with('mensagem', 'Login efectuado com sucesso!')
                            ->cookie('Admin','Folege',60)
                            ->cookie('Id',$ft->id,60);
                            break;
                        } else {

                            return redirect('/sgb-admin/login')->with('mensagem', 'Senha Ou Nome de Usuario Incorrecto');;
                        }
         
                    }
                } else {

                    return redirect('/sgb-admin/login')->with('mensagem', 'Senha Ou Nome de Usuario Incorrecto');;
                } 
                
            }
            
        }
        
        return; 
    }

    function sair(){

        return redirect('/sgb-admin/login')
        ->cookie(cookie()->forget('Admin'))
        ->cookie(cookie()->forget('Id'));
    }

    function perfil(){
         
        //Retorna a view do perfil de um funcionario (registar.blade.php)
        $func = Requisicao::cookie('Id');
        $this->funcionario = $this->getFuncionario($func);
        $funcionario = $this->funcionario;
        return view('admin.perfil', ['funcionario' => $funcionario]);

    }

    function update(Request $req){

        $func_id = Requisicao::cookie('Id');
        $this->funcionario = $this->getFuncionario($func_id);
        $func = $this->funcionario;
        
        $end = $this->endereco_controller->getEndereco($func->endereco_id);
        $user = $this->user_controller->getUser($func->user_id);
        $ficheiro = $this->ficheiro_controller->getFicheiro($req->ficheiro_id);

        $foto = $req->file('foto');
        if ($foto != null) {
            
            $extensao = $foto->getClientOriginalExtension();
            Storage::disk('public')->put($foto->getFilename() . '.' . $extensao, \File::get($foto));
            $ficheiro->nome = $foto->getFilename() . '.' . $extensao;
            $ficheiro->mime = $foto->getClientMimeType();
            $ficheiro->nome_original = $foto->getClientOriginalName();
            $this->ficheiro_controller->update($ficheiro);
        }

        $user->name = $req->usuario;
        $user->email = $req->email;
        $user->password = $req->senha;
        $this->user_controller->update($user); 

        $end->distrito = 'Kamubukhana';//$req->distrito;
        $end->bairro = 'Bagamoyo';//$req->bairro;
        $end->rua ='5538'; //$req->rua;
        $end->casa = '38';//$req->casa;
        $this->endereco_controller->update($end);
        
        $this->funcionario = $this->getFuncionario($func_id);
        $this->funcionario->nome = $req->nome;
        $this->funcionario->update();

        return redirect('/sgb-admin/usuarios/perfil')->with('mensagem', 'Dados de perfil salvos!');

    }
}
