<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('Admin123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Staff user
        \App\Models\User::create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'password' => bcrypt('Staff123'),
            'role' => 'staff',
            'email_verified_at' => now(),
        ]);

        // Regular user
        \App\Models\User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('User1234'),
            'role' => 'user',
            'email_verified_at' => now(),
        ]);

        $this->command->info('Demo users created successfully!');
        $this->command->info('Admin: admin@example.com / Admin123');
        $this->command->info('Staff: staff@example.com / Staff123');
        $this->command->info('User: user@example.com / User1234');
    }
}
