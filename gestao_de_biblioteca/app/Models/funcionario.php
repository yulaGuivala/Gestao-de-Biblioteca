<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $filable = [];
    protected $table="funcionario";
    protected $fillable = ['id','nome','endereco_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function endereco() {
        return $this->belongsTo(endereco::class, 'endereco_id');
    }
}
