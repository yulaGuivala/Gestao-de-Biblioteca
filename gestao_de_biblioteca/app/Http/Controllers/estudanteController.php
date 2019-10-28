<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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

    public  function index() {
        return view('user.login');
    }

    //Retorna a view de cadastro de estudantes (registar.blade.php)
    public function registar() {
        return view('user.registar');
    }

    //Armazena dados do Estudante na BD
    public function store(Request $req) {
        $validacao = $this->validar($req->all());
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao->errors())->withInput($req->all());
        }

        if($req->email && $req->numero && $req->casa) {
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
        return redirect('/inicio/minha-conta/registar')->with('mensagem', "'Cadastro efectuado com sucesso!'");
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

    public function destroy($id) {
        $this->estudante = $this->getEstudante($id);
        $estudante = $this->estudante->delete();
        return \Response::json($estudante);
    }

    private function getEstudante($id) {
        return $this->estudante->find($id);
    }

    public function update(Request $req) {
        /*$validacao = $this->validarUpdate($req->all());
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao->errors())->withInput($req->all());
        }*/

        $end = $this->endereco_controller->getEndereco($req->endereco_id);
        $user = $this->user_controller->getUser($req->user_id);
        $ficheiro = $this->ficheiro_controller->getFicheiro($req->ficheiro_id);

        $end->distrito = $req->distrito;
        $end->bairro = $req->bairro;
        $end->rua = $req->rua;
        $end->casa = $req->casa;
        $this->endereco_controller->update($end);

        $user->name = $req->nome;
        $user->email = $req->email;
        $user->password = $req->senha;
        $this->user_controller->update($user);

        $foto = $req->file('foto');
        if ($foto != null) {
            $extensao = $foto->getClientOriginalExtension();
            Storage::disk('public')->put($foto->getFilename() . '.' . $extensao, \File::get($foto));
            $ficheiro->nome = $foto->getFilename() . '.' . $extensao;
            $ficheiro->mime = $foto->getClientMimeType();
            $ficheiro->nome_original = $foto->getClientOriginalName();
            $this->ficheiro_controller->update($ficheiro);
        }

        $notificar = 0;
        if ($req->notificar == 'on') {
            $notificar = 1;
        }

        $this->estudante = $this->getEstudante($req->id);
        $this->estudante->nome = $req->nome;
        $this->estudante->numero = $req->numero;
        $this->estudante->faculdade = $req->facul;
        $this->estudante->notificar = $notificar;
        $this->estudante->update();

        return redirect('/')->with('mensagem', 'Dados de perfil salvos!');
    }

    //valida campos Unique na BD (numero de estudante e email)
    public function validar($dados)
    {
        if (\array_key_exists('numero', $dados) && \array_key_exists('email', $dados)) {
            $regras = [
                'email' => 'email|unique:users|max:255',
                'numero' => 'unique:estudantes'
            ];
        }
        $msg = [
            'email.unique' => 'Email está associado a uma conta, introduza outro!',
            'email.max' => 'No máximo 255 caracteres.',
            'numero.unique' => 'Numero associado a um estudante, introduza outro!'
        ];
        return Validator::make($dados, $regras, $msg);
    }

    public function validarUpdate($dados)
    {
        if (\array_key_exists('numero', $dados) && \array_key_exists('email', $dados)) {
            $regras = [
                'email' => ['email|unique:users|max:255', Rule::unique('users')->ignore($dados['user_id'])],
                'numero' => ['unique:estudantes', Rule::unique('estudantes')->ignore($dados['id'])]
            ];
        }
        $msg = [
            'email.unique' => 'Email está associado a uma conta, introduza outro!',
            'email.max' => 'No máximo 255 caracteres.',
            'numero.unique' => 'Numero associado a um estudante, introduza outro!'
        ];
        return Validator::make($dados, $regras, $msg);
    }
}
