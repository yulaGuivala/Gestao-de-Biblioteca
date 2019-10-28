<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->unsignedBigInteger('ficheiro_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreign('ficheiro_id')->references('id')->on('ficheiro')->onDelete('NO ACTION')->onUpdate('CASCADE');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        //usuario padrao
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'ficheiro_id' => 1,
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
        Schema::dropIfExists('users');
    }
}
