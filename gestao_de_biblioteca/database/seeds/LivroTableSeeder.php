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


        DB::table('livros')->insert([
            'titulo' => Str::random(10),
            'autor' => Str::random(10),
            'titulo' => Str::random(10),

        ]);
    }
}
