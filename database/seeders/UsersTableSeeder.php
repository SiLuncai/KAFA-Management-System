<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Zahwan Zaidi',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'password' => Hash::make('11111111'),  // Hashing the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Azim',
                'email' => 'teacher@gmail.com',
                'email_verified_at' => now(),
                'role' => 'teachers',
                'password' => Hash::make('11111111'),  // Hashing the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Saidatul',
                'email' => 'muip@gmail.com',
                'email_verified_at' => now(),
                'role' => 'muip',
                'password' => Hash::make('11111111'),  // Hashing the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Izzah',
                'email' => 'parent@gmail.com',
                'email_verified_at' => now(),
                'role' => 'parents',
                'password' => Hash::make('11111111'),  // Hashing the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]  
        ]);
    }
}
