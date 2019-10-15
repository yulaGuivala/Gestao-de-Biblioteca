<?php

namespace App\Http\Controllers;

use App\Models\endereco;

class enderecoController extends Controller
{
    function store(Endereco $end) {
        try {
            $end->save();
        } catch(\Exception $e) {
            echo "<h3 style='color:red'>ERRO:</h3>".$e->getMessage();
        }
        return $end->id;
    }
}
