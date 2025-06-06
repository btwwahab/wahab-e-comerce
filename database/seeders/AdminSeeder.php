<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
['email' => 'admin@admin.com'], // Ensure unique admin
    [
                'name' => 'Admin User',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ]
        );
    }
}
