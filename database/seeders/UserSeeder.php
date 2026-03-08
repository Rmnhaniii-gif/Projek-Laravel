<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => Str::uuid(),
                'firstname' => 'Admin',
                'lastname' => 'Perpus',
                'username' => 'admin',
                'email' => 'admin@perpus.com',
                'password' => Hash::make('password'),
                'isadmin' => true,
            ],
            [
                'id' => Str::uuid(),
                'firstname' => 'Hani',
                'lastname' => 'User',
                'username' => 'hani123',
                'email' => 'hani@perpus.com',
                'password' => Hash::make('123456'),
                'isadmin' => false,
            ],
        ]);
    }
}