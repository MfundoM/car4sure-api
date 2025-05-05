<?php

namespace Database\Seeders;

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
        \App\Models\Policy::factory(5)->create()->each(function ($policy) {
            \App\Models\PolicyHolder::factory()->create(['policy_id' => $policy->id]);
        });

        \App\Models\Driver::factory(10)->create();
        \App\Models\Vehicle::factory(10)->create()->each(function ($vehicle) {
            \App\Models\GaragingAddress::factory()->create(['vehicle_id' => $vehicle->id]);
            \App\Models\Coverage::factory(2)->create(['vehicle_id' => $vehicle->id]);
        });
    }
}
