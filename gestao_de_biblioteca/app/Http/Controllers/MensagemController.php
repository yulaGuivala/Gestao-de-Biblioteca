<?php

namespace App\Http\Controllers;

use App\Models\mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     * Comando php artisan make:controller MensagemController --resource
     * @return \Illuminate\Http\Response
     */
    private $mensagem;

    public function __construct() {
        $this->mensagem = new Mensagem();
    }

    public function index()
    {
        return view('user.contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!($request->email && $request->assunto && $request->texto)){
            return redirect()->back()->with('msgErro', 'Erro, dados invalidos!');
        }
        $this->mensagem->email = $request->email;
        $this->mensagem->assunto = $request->assunto;
        $this->mensagem->texto = $request->texto;
        $this->mensagem->save();
        return redirect()->back()->with('msgSucesso', "'Sua mensagem foi enviada!'");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->mensagem = $this->getMensagem($id);
        return \Response::json($this->mensagem);
    }

    public function showAll()
    {
        $listaMsg = mensagem::all();
        return view('admin.lista-msg',['listaMsg' => $listaMsg]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->mensagem = $this->getMensagem($id);
        $mensagem = $this->mensagem->delete();
        return \Response::json($mensagem);
    }

    private function getMensagem($id) {
        return $this->mensagem->find($id);
    }
}
