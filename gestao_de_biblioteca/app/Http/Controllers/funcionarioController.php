<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\funcionario;
use App\Models\user;
use App\Models\endereco;
use FuncionarioTableSeeder;

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

        return view('user.registar');

    }


    public function store(Request $request){

        // $dataForm = $request->all();

        // $insert = $this->funcionario->create($dataForm);

        if($req->email && $req->numero && $req->casa) {
            $user = new User();
            $end = new Endereco();

            $user->name = $req->nome." ".$req->sobrenome;
            $user->password = $req->senha;
            $user_id = $this->user_controller->store($user);

            $end->distrito = $req->distrito;
            $end->bairro = $req->bairro;
            $end->rua = $req->rua;
            $end->casa = $req->casa;
            $end_id = $this->endereco_controller->store($end);

            Funcionario::create([
                'nome'=> $req->nome,
                "endereco_id" => $end_id,
                "user_id" => $user_id
            ]);
        }
        return redirect('/inicio/minha-conta/registar')->with('message', 'Pessoa cadastrada com sucesso!');
    }

    public function listaFunc() {

        $listaFunc = estudante::all();
        return view('admin.lista-funcionarios',['funcionarios' => $listaFunc]);

    }
}
