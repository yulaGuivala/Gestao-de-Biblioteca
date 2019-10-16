<?php

namespace App\Http\Controllers;

use App\Models\endereco;

class enderecoController extends Controller
{
    private $endereco;

    public function __construct() {
        $this->endereco = new Endereco();
    }

    public function store(Endereco $end) {
        try {
            $end->save();
        } catch(\Exception $e) {
            echo "<h3 style='color:red'>ERRO (EnderecoController->save):</h3>".$e->getMessage();
        }
        return $end->id;
    }

    public function update(Endereco $end) {
        try {
            $end->update();
        } catch (\Exception $e) {
            echo "<h3 style='color:red'>ERRO (EnderecoController->update):</h3>" . $e->getMessage();
        }
    }

    public function getEndereco($id) {
        return $this->endereco->find($id);
    }
}
