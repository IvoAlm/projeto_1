<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Ivo Almeida',
            'email' => 'ivodsalmeida@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
