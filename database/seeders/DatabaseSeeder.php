<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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

        User::factory()->create([
            'name' => 'Admin Zeyania',
            'email' => 'admin@zeyania.test',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name'  => 'Customer Zeyania',
            'email' => 'customer@zeyania.test',
        ]);

        $listings = Listing::factory(10)->create();
    }
}
