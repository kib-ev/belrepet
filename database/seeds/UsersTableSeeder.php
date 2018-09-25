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
        DB::table('users')->insert(
            [
                'id' => 1,
                'firstname' => 'Евгений',
                'lastname' => 'Киб',
                'joinas' => '',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'remember_token' => str_random(10),
            ]
        );
    }
}
