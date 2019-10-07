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
            'titulo' => Str::ramdom(10),
            'autor' => Str::ramdom(10),
            'titulo' => Str::ramdom(10),

        ]);
    }
}
