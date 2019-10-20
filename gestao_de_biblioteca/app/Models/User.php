<?php

namespace App\Models;

use App\Models\estudante;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','email', 'password', 'ficheiro_id'
    ];
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function estudante() {
        return $this->hasOne(estudante::class,'user_id');
    }

    public function funcionario() {
        return $this->hasOne(funcionario::class,'user_id');
    }

    public function ficheiro() {
        return $this->belongsTo(ficheiro::class,'ficheiro_id');
    }

    public function mensagem()
    {
        return $this->hasMany(mensagem::class, 'user_id');
    }
}
