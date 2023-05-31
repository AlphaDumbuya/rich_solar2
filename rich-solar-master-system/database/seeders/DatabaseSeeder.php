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
        \App\Models\User::factory(10)->create();
        \App\Models\SolarPanel::factory(3)->create();
        \App\Models\SolarLight::factory(3)->create();
        \App\Models\SolarBattery::factory(3)->create();

    }
}
