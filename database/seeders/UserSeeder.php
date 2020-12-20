<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('secret'),
        ]);

    }
}
