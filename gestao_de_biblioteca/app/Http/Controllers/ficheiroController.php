<?php

namespace App\Http\Controllers;

use App\Models\ficheiro;

class ficheiroController extends Controller
{
    private $ficheiro;

    public function __construct()
    {
        $this->ficheiro = new ficheiro();
    }

    public function store(ficheiro $fich) {
        /*request()->validate([
            'nome' => 'required',
        ]);*/

        try {
            $fich->save();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO (FicheiroController->store) :</h3>" . $e->getMessage();
        }
        return $fich->id;
    }

    public function update(ficheiro $fich)
    {
        try {
            $fich->update();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO (FicheiroController->update) :</h3>" . $e->getMessage();
        }
    }

    public function getFicheiro($id)
    {
        return $this->ficheiro->find($id);
    }
}
