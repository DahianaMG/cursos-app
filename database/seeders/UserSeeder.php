<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role_id' => 1
        ]);

        User::firstOrCreate([
            'name' => 'Juancito',
            'email' => 'juancito@gmail.com',
            'password' => Hash::make('password123'),
            'role_id' => 2
        ]);
    }
}
