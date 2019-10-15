<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\user;
use App\Models\endereco;
use App\Models\estudante;
use App\Models\ficheiro;

class estudanteController extends Controller
{
    private $ficheiro_controller;
    private $user_controller;
    private $endereco_controller;
    private $estudante;

    public function __construct(UserController $user_controller,
        EnderecoController $endereco_controller, FicheiroController $ficheiro_controller) {
        $this->ficheiro_controller = $ficheiro_controller;
        $this->user_controller = $user_controller;
        $this->endereco_controller = $endereco_controller;
        $this->estudante = new Estudante();
    }

    //Retorna a view de cadastro de estudantes (registar.blade.php)
    public function registar() {
        return view('user.registar');
    }

    //Armazena dados do Estudante na BD
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
            $ficheiro = new Ficheiro();

            $foto = $req->file('foto');
            $extensao = $foto->getClientOriginalExtension();
            Storage::disk('public')->put($foto->getFilename() . '.' . $extensao, \File::get($foto));
            $ficheiro = new ficheiro();
            $ficheiro->nome = $foto->getFilename() . '.' . $extensao;
            $ficheiro->mime = $foto->getClientMimeType();
            $ficheiro->nome_original = $foto->getClientOriginalName();
            $fich_id = $this->ficheiro_controller->store($ficheiro);

            $user->name = $req->nome;
            $user->email = $req->email;
            $user->password = $req->senha;
            $user->ficheiro_id = $fich_id;
            $user_id = $this->user_controller->store($user);

            $end->distrito = $req->distrito;
            $end->bairro = $req->bairro;
            $end->rua = $req->rua;
            $end->casa = $req->casa;
            $end_id = $this->endereco_controller->store($end);

            $notificar = 0;
            if($req->notificar == 'on') {
                $notificar = 1;
            }

            Estudante::create([
                'nome' => $req->nome." ".$req->sobrenome,
                'numero'=> $req->numero,
                'faculdade' => $req->facul,
                'notificar' => $notificar,
                'endereco_id' => $end_id,
                'user_id' => $user_id
            ]);
        }
        return redirect('/inicio/minha-conta/registar')->with('mensagem', 'Cadastrado efectuado com sucesso!');
    }

    //Retorna dados de todos Estudantes para a view lista-estudantes.blade.php
    public function show() {
        $listaEst = Estudante::all();
        return view('admin.lista-estudantes', ['estudantes' => $listaEst]);
    }

    //Retorna a view do perfil de um estudante (registar.blade.php)
    public function showPerfil($id) {
        $est = $this->getEstudante($id);
        return view('user.perfil', ['estudante' => $est]);
    }

   /* public function destroy(Request $req) {
        $this->estudante = $this->getEstudante($id);
        $this->estudante->delete();
        return redirect('/sgb-admin/usuarios/estudantes')->with('mensagem', 'Estudante Excluido!');
    }*/

    private function getEstudante($id) {
        return $this->estudante->find($id);
    }
}
