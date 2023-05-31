<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolarBattery>
 */
class SolarBatteryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'picture' => fake()->name(),
            'name' => fake()->name(),
            'type' => fake()->sentence(),
            'electricity_stored' => fake()->sentence(),
            'electricity_released' => fake()->sentence(),
            'price' => fake()->sentence(),
            'category' => fake()->sentence()
        ];
    }
}
