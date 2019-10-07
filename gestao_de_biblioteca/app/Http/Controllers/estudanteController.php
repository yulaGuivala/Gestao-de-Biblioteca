<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudante;

class estudanteController extends Controller
{
    public function listar() {
        $listaEst = estudante::all();
        return view('admin.lista-estudantes',['estudantes' => $listaEst]);
    }
}
