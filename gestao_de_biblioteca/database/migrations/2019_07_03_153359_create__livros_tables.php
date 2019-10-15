<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('autor');
            $table->string('edicao');
            $table->string('editora');
            $table->string('pais')->nullable;
            $table->integer('ano');
            $table->string('co-autor')->nullable();
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionario')->onDelete('NO ACTION')->onUpdate('CASCADE');
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('NO ACTION')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_livro_tables');
    }
}
