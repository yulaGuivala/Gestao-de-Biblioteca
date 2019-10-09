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
        for ($i = 1; $i <= 20; $i++)
            $this->call([FuncionarioTableSeeder::class,LivroTableSeeder::class]);
    }
}
