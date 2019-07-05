<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudateAsLivroTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudate_as_livro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('data');
            $table->unsignedBigInteger('estudante_id');
            $table->unsignedBigInteger('livro_id');
            $table->foreign('estudante_id')->references('id')->on('estudantes')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('no action')->onUpdate('cascade');
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
        Schema::dropIfExists('_estudate_as_livro_tables');
    }
}
