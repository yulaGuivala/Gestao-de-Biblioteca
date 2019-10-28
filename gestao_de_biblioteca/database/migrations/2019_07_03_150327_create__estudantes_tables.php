<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\estudante;

class CreateEstudantesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public funCTION up()
    {
        Schema::create('estudantes', funCTION (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('numero')->unique();
            $table->boolean('notificar')->default(0);
            $table->enum('faculdade',['Faculdade de Ciências Politicas e Administração',
                                       'Faculdade de Direito',
                                        'Faculdade de Ciências Agrárias',
                                        'Faculdade de Economia e Informática']);
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('NO ACTION')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('CASCADE');
            $table->timestamps();
            $table->softDeletes();
        });

        estudante::create([
            'nome' => 'super user',
            'numero' => 20150000,
            'faculdade' => 'Faculdade de Economia e Informática',
            'endereco_id' => 1,
            'user_id' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public funCTION down()
    {
        Schema::dropIfExists('_estudade_tables');
    }
}
