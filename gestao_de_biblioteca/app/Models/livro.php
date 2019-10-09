<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $filable=['titulo','autor','edicao','editora','pais','ano'];
    protected $table="livros";

    public function funcionario(){
        return $this->belongsTo(funcionario::class,'funcionario_id');
    }

    public function categria(){
        return $this->belongsTo(categoria::class,'categoria_id');
    }

}
