<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $filable=['titulo','autor','edicao','editora','pais','ano'];
    protected $table="livros";
}
