<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $fillable=['titulo','autor','edicao','editora','pais','ano','funcionario_id','categoria_id'];
    protected $table="livros";

    public function funcionario(){
        return $this->belongsTo(funcionario::class,'funcionario_id');
    }

    public function categoria(){
        return $this->belongsTo(categoria::class,'categoria_id');
    }
}
