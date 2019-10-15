<?php

use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('enderecos')->insert([
            'distrito' => Str::random(10),
            'bairro' => Str::random(10),
            'rua' => Str::random(10),
            'casa' => rand(100,5000),
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
