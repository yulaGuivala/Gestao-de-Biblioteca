<?php

use Illuminate\Database\Seeder;

class FicheiroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('ficheiro')->insert([
            'nome' => Str::random(30),
            'mime' => Str::random(10),
            'nome_original' => Str::random(30),
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
