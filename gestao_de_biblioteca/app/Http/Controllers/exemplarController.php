<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exemplar;

class exemplarController extends Controller
{
    public function store($id_livro,$qtd){
        Exemplar::create([
            'quantidade'=>$qtd,
            'livro_id'=>$id_livro
        ]);
    }
}
