<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtiene todos los archivos en la carpeta public/assets/img/torneos
        $images = File::allFiles(public_path('assets/img/torneos'));

        // Verifica si la carpeta tiene imágenes y selecciona una aleatoria
        if (!empty($images)) {
            $randomImage = $this->faker->randomElement($images);
            $imageName = 'assets/img/torneos/' . $randomImage->getFilename(); // Obtiene la ruta relativa de la imagen
        } else {
            $imageName = 'assets/img/usuario_icon_default.png'; // Imagen predeterminada en caso de que no haya imágenes en la carpeta
        }

        return [
            'name' => $this->faker->word() . ' Tournament', 
            'icon' => $imageName, 
            'type' => $this->faker->randomElement(['Liga', 'Eliminatoria', 'Liga y Eliminatoria']), // OJO
            'start_date' => $this->faker->dateTimeBetween('now', '+1 year'), 
            'end_date' => $this->faker->dateTimeBetween('+1 year', '+2 years'), 
            'description' => $this->faker->text(200), 
        ];
    }
}
