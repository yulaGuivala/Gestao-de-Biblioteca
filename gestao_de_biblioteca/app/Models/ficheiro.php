<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ficheiro extends Model
{
    protected $fillable = ['nome', 'mime', 'nome_original'];
    protected $table = 'ficheiro';

    public function ficheiro() {
        return $this->hasOne(User::class,'ficheiro_id');
    }
}
