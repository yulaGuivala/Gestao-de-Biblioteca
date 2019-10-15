<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficheiro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->nullable();
            $table->string('mime')->nullabble();
            $table->string('nome_original')->nullabble();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficheiro');
    }
}
