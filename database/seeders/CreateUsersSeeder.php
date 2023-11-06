<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@uaswebdev.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@uaswebdev.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Super Admin User',
                'email' => 'super-admin@uaswebdev.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}