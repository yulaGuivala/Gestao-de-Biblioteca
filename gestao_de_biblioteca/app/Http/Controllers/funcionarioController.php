<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\funcionario;

class funcionarioController extends Controller
{
    private $funcionario;
    
    public function __construct(Funcionario $funcionario) {
        
        $this->funcionario = $funcionario;
        
    }
    public function create() {
            
        return view('onde serao levados os dados do formularo.');
        
    }


    public function store(Request $request){
        
        $dataForm = $request->all();
        
        $insert = $this->funcionario->create($dataForm);
        
        return 'Folege';
    }
    
    public function listaFunc(funcionario $funcionario) {
        
        echo $funcionario->all();
        
    }
}
