<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class estudante extends Model
{
    protected $fillable = ['id', 'nome','numero', 'faculdade', 'endereco_id','user_id'];
    protected $table = 'estudantes';

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function endereco() {
        return $this->belongsTo(endereco::class, 'endereco_id');
    }
}
