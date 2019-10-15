<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias=array(
            'Faculdade de Ciências politicas e Administração',
            'Faculdade de direicto',
            'Faculdade de Ciências Agrarias',
            'Faculdade de Economia e Informatica'
        );

        DB::table('categoria')->insert([
            'nome' => $categorias[rand ( 0 , count($categorias) -1)],
        ]);
    }
}
