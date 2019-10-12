<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\endereco;
use App\Models\estudante;

class estudanteController extends Controller
{
    private $user_controller;
    private $endereco_controller;

    public function __construct(UserController $user_controller,
                        EnderecoController $endereco_controller) {
        $this->user_controller = $user_controller;
        $this->endereco_controller = $endereco_controller;
    }

    public function listar() {
        $listaEst = estudante::all();
        return view('admin.lista-estudantes',['estudantes' => $listaEst]);
    }

    public function registar() {
        return view('user.registar');
    }

    public function store(Request $req) {
       /* $val = \Validator::make( $req->all(), [
            'nome.*' => 'required',
            'sobrenome.*' => 'required',
            'facul.*' => 'required',
            'numero.*' => 'numero|unique:estudantes',
            'email.*' => 'email|unique:users|max:255',
            /*'password' => 'required|min:4',
            'distrito' => 'required',
            'bairro' => 'required',
            'rua' => 'required',
            'casa' => 'required'
        ]);
        if ($val->fails()) {
            return back()->withInput()->withErrors($val->errors());
        }

        [
            'numero.unique' => 'Numero de estudante esta sendo usado por outro estudante!',
            'email.unique' => 'Email ja cadastrado na base de dados, introduza outro!',
            'email.max' => 'Quantidade maxima de caracteres 255!'
        ]);*/

        if($req->email && $req->numero && $req->casa) {
            $user = new User();
            $end = new Endereco();

            $user->name = $req->nome;
            $user->foto = $req->foto;
            $user->email = $req->email;
            $user->password = $req->senha;
            $user_id = $this->user_controller->store($user);

            $end->distrito = $req->distrito;
            $end->bairro = $req->bairro;
            $end->rua = $req->rua;
            $end->casa = $req->casa;
            $end_id = $this->endereco_controller->store($end);

            Estudante::create([
                'nome' => $req->nome." ".$req->sobrenome,
                'numero'=> $req->numero,
                'faculdade' => $req->facul,
                'endereco_id' => $end_id,
                'user_id' => $user_id
            ]);
        }
    return redirect('/inicio/minha-conta/registar')->with('message', 'Pessoa cadastrada com sucesso!');
    }

}
