<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(50)->create();
        User::create(
            [
                'people_id' => 201,
                'username' => 'duckworth',
                'phone' => 83456,
                'rol_id' => 1,
                'email' => 'memo@memo.com',
                'password' => 'memo1234',
            ]
        );
    }

}
