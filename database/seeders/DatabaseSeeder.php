<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Correct import of the User model

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create a single specific user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('your-password'), // Ensure you set a password
        ]);

        // Create 10 additional generic users
        User::factory(10)->create();
    }
}
