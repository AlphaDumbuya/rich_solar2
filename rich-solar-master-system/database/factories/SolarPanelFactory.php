<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolarPanel>
 */
class SolarPanelFactory extends Factory
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
            'wattage' => fake()->sentence(),
            'voltage' => fake()->sentence(),
            'current' => fake()->sentence(),
            'size' => fake()->sentence(),
            'price' => fake()->sentence(),
            'category' => fake()->sentence()
            
        ];
    }
}
