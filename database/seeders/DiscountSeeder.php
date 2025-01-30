<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Manual input
        \App\Models\Discount::create([
            'name' => 'Welcome WKE',
            'description' => 'Member baru WKE',
            'type' => 'percentage',
            'value' => 20,
            'status' => 'active',
            'expired_date' => '2026-01-31'
        ]);

        \App\Models\Discount::create([
            'name' => 'New Year',
            'description' => 'Discount New Year',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2025-01-07'
        ]);

        \App\Models\Discount::create([
            'name' => 'Ramadhan',
            'description' => 'Discount Ramadhan',
            'type' => 'percentage',
            'value' => 15,
            'status' => 'active',
            'expired_date' => '2025-03-31'
        ]);
    }
}
