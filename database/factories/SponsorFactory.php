<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsor>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(), 
            'phone' => $this->faker->numerify('###-###-####'), 
            'email' => substr($this->faker->unique()->safeEmail(), 0, 29),  
            'location' => $this->faker->city(), 
            'type' => $this->faker->randomElement(['Equipo', 'Jugador', 'Torneo']), 
        ];
    }
}
