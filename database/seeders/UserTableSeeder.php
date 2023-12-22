<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            // 'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Attach the 'admin' role to the user
        $adminRole = Role::where('slug', 'admin')->first();
        $user->roles()->attach($adminRole);
    }
}
