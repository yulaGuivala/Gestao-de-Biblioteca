<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            'name' =>Str::random(30),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => $data,
            'updated_at' => $data
        ]);
    }
}
