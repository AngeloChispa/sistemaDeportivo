<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'people_id' => fake()->unique()->numberBetween(151,200),
            'username' => fake()->unique()->userName(),
            'phone' => fake()->unique()->phoneNumber(),
            'email' => fake()->email(),
            'password' => '123Tamarindo',
        ];
    }
}
