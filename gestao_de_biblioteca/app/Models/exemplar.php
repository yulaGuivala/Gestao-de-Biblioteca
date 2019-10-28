<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class exemplar extends Model
{
    protected $table="exemplar";
    protected $fillable=['quantidade','livro_id'];
}
