<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolarLight>
 */
class SolarLightFactory extends Factory
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
            'solar_panel' => fake()->sentence(),
            'battery' => fake()->sentence(),
            'price' => fake()->sentence(),
            'category' => fake()->sentence()
        ];
    }
}
