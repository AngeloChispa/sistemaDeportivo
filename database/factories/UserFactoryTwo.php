<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactoryTwo extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(), 
            'date_birth' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'up_date' => now(),
            'avatar' => $this->faker->imageUrl(100, 100),
        ];
    }
}
