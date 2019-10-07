<?php

use Illuminate\Database\Seeder;

class FuncionarioTableSeeder extends Seeder
{
    public function run()
    {
        $end = new EnderecoTableSeeder();
        $end->run();
        $idEnd = DB::getPdo()->lastInsertId();

        $user = new UsersTableSeeder();
        $user->run();
        $idUse = DB::getPdo()->lastInsertId();

        DB::table('funcionario')->insert([
            'nome' => Str::random(10),
            'endereco_id' => $idEnd,
            'user_id' => $idUse,
        ]);
    }
}
