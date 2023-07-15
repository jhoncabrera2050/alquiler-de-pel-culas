<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i < 2; $i++){
            User::create(
                [
                    'name' => "Administrador$i",
                    'email' => "administrador$i@gmail.com",
                    'role_id' => 1,
                    'password' => bcrypt("administrador$i"),
                ]
            );
        }
    }
}
