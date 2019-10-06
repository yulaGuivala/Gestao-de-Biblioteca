<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class estudante extends Model
{
    protected $fillable = ['id', 'nome', 'faculdade', 'endereco_id','user_id'];
    protected $table = 'estudantes';
}
