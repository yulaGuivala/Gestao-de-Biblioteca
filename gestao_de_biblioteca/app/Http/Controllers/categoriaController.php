<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller

{
    public function buscar (Categoria $item) {
        //$item="Faculdade de Ciências politicas e Administração";
        $cat= categoria::where('nome',$item->nome)->get()->first();
        return $cat->id;

        //echo dd($cat);
    }
}
