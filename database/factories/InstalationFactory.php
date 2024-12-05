<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instalation>
 */
class InstalationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /* 'name' => $this->faker->company,  */
            'name' => substr($this->faker->company(),0,29),
            'country'=> substr($this->faker->country,0,29),
            'state' => $this->faker->state, 
            'city' => $this->faker->city, 
            'capacity' => $this->faker->numberBetween(100, 50000), // Genera una capacidad entre 100 y 50000
        ];
    }
}
