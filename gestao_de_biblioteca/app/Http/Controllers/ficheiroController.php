<?php

namespace App\Http\Controllers;

use App\Models\ficheiro;

class ficheiroController extends Controller
{
    public function store(ficheiro $fich) {
        /*request()->validate([
            'nome' => 'required',
        ]);*/

        try {
            $fich->save();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO:</h3>" . $e->getMessage();
        }
        return $fich->id;
    }
}
