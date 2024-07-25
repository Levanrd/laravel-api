<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserRolesSeeder::class);

        // Create one admin
        User::factory()->admin()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'user_role_id' => 1,
        ]);

        // Create 5 users with 10 tasks each
        User::factory(5)->has(Task::factory(10))->create([
            'user_role_id' => 2
        ]);

        // Create one regular user
        // User::factory()->create([
        //     'first_name' => 'Regular',
        //     'last_name' => 'User',
        //     'email' => 'user@example.com',
        //     'user_role_id' => 2
        // ]);

        // Create 10 sample tasks
        Task::factory(10)->create();
    }
}
