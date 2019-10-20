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
    private $user_controller;

    public function __construct(UserController $user_controller) {
        $this->mensagem = new Mensagem();
        $this->user_controller = $user_controller;
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
        //
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
