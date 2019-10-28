<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\endereco;

class CreateEnderecosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('distrito');
            $table->string('bairro');
            $table->string('rua');
            $table->integer('casa');
            $table->timestamps();
            $table->softDeletes();
        });

        endereco::create([
            'distrito' => 'KaMpfumo',
            'bairro' => 'Urbanizacao',
            'rua' => 'joaquim chissano',
            'casa' =>'125',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_enderecos_tables');
    }
}
