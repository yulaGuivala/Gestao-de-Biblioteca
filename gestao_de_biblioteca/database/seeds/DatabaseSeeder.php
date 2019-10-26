<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++)

            $this->call([
                LivroTableSeeder::class,
                EstudanteTableSeeder::class,
                FuncionarioTableSeeder::class,
                //MensagemTableSeeder::class
            ]);
    }
}
