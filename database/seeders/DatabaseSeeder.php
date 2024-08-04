<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
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
        // User::factory(10)->create();
        $this->call([
            CinemaSeeder::class,
            MovieSeeder::class,
            CinemaTicketSeeder::class,
        ]);

        // Create a specific user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
