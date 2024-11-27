<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'people_id' => fake()->unique()->numberBetween(1,50),
            'status' => fake()->randomElement(['Lesionado','Activo', 'Retirado']),
            'height' => fake()->randomFloat(2, 1.50, 3.00),
            'bestSide' => fake()->randomElement(['Izquierdo','Derecho']),
        ];
    }
}
