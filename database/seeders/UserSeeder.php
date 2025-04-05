<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('users')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@apms.com',//Str::random(10) . '@apms.com',
                'phone' => random_int(1000000000, 9999999999),
                'password' => Hash::make('1234'),
                'role'=>'admin',
                'email_verified_at' => now(),
                'created_by' => 1,
                'created_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Chetan Vadaye',
                'username' => 'chetan',
                'email' => 'chetanvadaye@gmail.com',
                'phone' => '8806811667',
                'password' => Hash::make('1234'),
                'role'=>'admin',
                'email_verified_at' => now(),
                'created_by' => 1,
                'created_at' => now(),
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
