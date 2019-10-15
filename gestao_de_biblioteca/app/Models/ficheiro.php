<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ficheiro extends Model
{
    protected $fillable = ['id', 'nome', 'mime', 'nome_original'];
    protected $table = 'ficheiro';

    public function user() {
        return $this->belongsTo(User::class,'ficheiro_id');
    }
}
