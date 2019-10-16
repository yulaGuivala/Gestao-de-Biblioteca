<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\funcionario;
use App\Models\user;
use App\Models\endereco;


class funcionarioController extends Controller
{
    private $user_controller;
    private $endereco_controller;

    public function __construct(UserController $user_controller,
                        EnderecoController $endereco_controller) {
        $this->user_controller = $user_controller;
        $this->endereco_controller = $endereco_controller;
    }


    public function create() {

        return view('admin.adicionar-funcionario');

    }


    public function store(Request $req){
        // $dataForm = $request->all();

        // $insert = $this->funcionario->create($dataForm);

       if($req->mail && $req->usuario) {
            $user = new User();
            $end = new Endereco();
            //var_dump($request->all());

            $user->name = $req->usuario;
            $user->foto = $req->img;
            $user->email = $req->mail;
            $user->password = $req->senha;
            $user_id = $this->user_controller->store($user);
            //echo $user_id;

            $end->distrito = 'Kamubukhana';//$req->distrito;
            $end->bairro = 'Bagamoyo';//$req->bairro;
            $end->rua ='5538'; //$req->rua;
            $end->casa = '38';//$req->casa;
            $end_id = $this->endereco_controller->store($end);
            //echo $end_id;

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
}
