<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
                'name' => 'Admin User',
                'email' => 'warungkena@warung.com',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
                'phone' => '12345678',
        ]);

        //seeder profile_warungs manual
        \App\Models\ProfileWarung::factory()->create([
            'name' => 'Warung Keena',
            'address' => 'JL. H.Saamin Cilandak No.20',
            'phone' => '1234567890',
            'email' => 'Dika@warung.com',
        ]);

        //call category seeder
        $this->call(CategorySeeder::class);

    }
}
