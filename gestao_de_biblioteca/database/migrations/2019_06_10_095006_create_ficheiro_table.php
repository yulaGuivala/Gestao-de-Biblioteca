<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\ficheiro;

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
            $table->string('mime')->nullable();
            $table->string('nome_original')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        ficheiro::create([
            'nome' => "profile.png",
            'mime' => Str::random(10),
            'nome_original' => Str::random(30),
            'created_at' => date('Y-m-d H:i:s')
        ]);
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
