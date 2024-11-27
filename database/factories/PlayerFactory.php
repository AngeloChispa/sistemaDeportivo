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
            'status' => $this->faker->randomElement(['Activo', 'Lesionado', 'Retirado']),
            'height' => $this->faker->randomFloat(2, 1.50, 2.20),
            'weight' => $this->faker->randomFloat(2, 50, 120),
            'dominant_side' => $this->faker->randomElement(['Izquierda', 'Derecha']),
            'birthplace' => $this->faker->city(),
            'nationality' => $this->faker->countryCode(), 
        ];
    }
}
