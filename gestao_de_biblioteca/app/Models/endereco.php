<?php

namespace App\Models;

use App\Http\Controllers\funcionarioController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class endereco extends Model
{
   protected $fillable =['id', 'distrito', 'bairro', 'rua', 'casa'];
   protected $table = 'enderecos';

   public function estudante() {
       return $this->hasOne(estudante::class, 'endereco_id');
   }

   public function funcionario(){
       return $this->hasOne(funcionario::class, 'endereco_id');
   }


}
