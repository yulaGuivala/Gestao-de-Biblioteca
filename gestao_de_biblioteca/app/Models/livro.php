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

    public function estudantes(){
        return $this->belongsToMany(estudante::class,'estudate_as_livro')
                    ->withPivot('estado')
                    ->withTimestamps();
    }

    public function ficheiro() {
        return $this->belongsTo(ficheiro::class,'ficheiro_id');
    }


}
