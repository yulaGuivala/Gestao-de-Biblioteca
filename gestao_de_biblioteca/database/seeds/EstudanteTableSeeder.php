<?php

use Illuminate\Database\Seeder;


class EstudanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UsersTableSeeder();
        $user->run();
        $idUser = DB::getPdo()->lastInsertId();

        $endereco = new EnderecoTableSeeder();
        $endereco->run();
        $idEnd = DB::getPdo()->lastInsertId();

        $data = date('Y-m-d H:i:s');

        DB::table('estudantes')->insert([
            'nome' => Str::random(30),
            'numero' => rand(20150000,20199999),
            'faculdade' => 'Faculdade de Direito',
            'endereco_id' => $idEnd,
            'user_id' => $idUser,
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
