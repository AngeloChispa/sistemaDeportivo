<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        Rol::create([
            'name' => 'Admin',
            'description' => 'Eres el amo de todo.'
        ]);

        Rol::create([
            'name' => 'Usuario',
            'description' => 'Eres un usuario normal, sin nada especial a los demas.'
        ]);
    }
}