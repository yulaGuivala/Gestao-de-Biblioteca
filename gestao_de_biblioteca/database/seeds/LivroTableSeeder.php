<?php

use Illuminate\Database\Seeder;

class LivroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $funcionario = new FuncionarioTableSeeder();
        $funcionario->run();
        $idFun = DB::getPdo()->lastInsertId();

        $categoria = new CategoriaTableSeeder();
        $categoria->run();
        $idCat = DB::getPdo()->lastInsertId();

        DB::table('livros')->insert([
            'titulo' => Str::random(10),
            'autor' => Str::random(10),
            'pais' => Str::random(10),

            'autor' => Str::random(10),
            'co-autor' => Str::random(10),
            'edicao' => Str::random(10),
            'editora' => Str::random(10),
            'ano'=>rand(4,4),
            'funcionario_id'=>$idFun,
            'categoria_id'=>$idCat,
        ]);
    }
}
