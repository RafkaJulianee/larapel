<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil RoleSeeder untuk membuat role admin & user terlebih dahulu
        $this->call([
            RoleSeeder::class,
        ]);
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            // Default role_id untuk test user (misal 1 untuk admin atau user)
            'role_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            // Default role_id untuk test user (misal 1 untuk admin atau user)
            'role_id' => 2,
        ]);
    }
}
