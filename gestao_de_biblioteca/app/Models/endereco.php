<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
   protected $fillable =['id', 'distrito', 'bairro', 'rua'];
   protected $table = 'enderecos';
}
