<?php

use Illuminate\Database\Seeder;

class MensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('mensagem')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'assunto' => Str::random(30),
            'texto' => Str::random(200),
            'user_id' => rand(1,10),
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
