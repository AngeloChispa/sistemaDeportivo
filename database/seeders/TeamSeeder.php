<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Real Vegas',
            'state' => 'Tamaulipas',
            'city' => 'Ciudad Victoria',
            'sport_id' => 1,
            'shield' => 'assets/img/juve.png',
        ]);

        //Lo siguiente no esta bien hacerlo pero es para testear
        DB::table('player_team')->insert(
            [
                'team_id' => 1,  
                'player_id' => 34,
                'position' => 'Delantero',
                'dorsal' => 7,
            ]
        );

        Team::create([
            'name' => 'Deportivo La Moderna',
            'state' => 'Tamaulipas',
            'city' => 'Ciudad Victoria',
            'sport_id' => 1
        ]);

        DB::table('player_team')->insert(
            [
                'team_id' => 2,  
                'player_id' => 30,
                'position' => 'Defensa',
                'dorsal' => 7,
            ]
        );

        $teams = [
            ['name' => 'Guerreros Aztecas', 'state' => 'Jalisco', 'city' => 'Guadalajara', 'sport_id' => 1, 'shield' => 'assets/img/america.png'],
            ['name' => 'Tigres del Norte', 'state' => 'Nuevo León', 'city' => 'Monterrey', 'sport_id' => 1, 'shield' => 'assets/img/arsenal.png'],
            ['name' => 'Águilas de Oriente', 'state' => 'Veracruz', 'city' => 'Xalapa', 'sport_id' => 1, 'shield' => 'assets/img/barca.png'],
            ['name' => 'Coyotes de la Laguna', 'state' => 'Coahuila', 'city' => 'Torreón', 'sport_id' => 1, 'shield' => 'assets/img/bayern.png'],
            ['name' => 'Zorros del Bajío', 'state' => 'Guanajuato', 'city' => 'León', 'sport_id' => 1, 'shield' => 'assets/img/betis.png'],
            ['name' => 'Chacales del Mayab', 'state' => 'Yucatán', 'city' => 'Mérida', 'sport_id' => 1, 'shield' => 'assets/img/chelsea.png'],
            ['name' => 'Osos Capitalinos', 'state' => 'Ciudad de México', 'city' => 'Ciudad de México', 'sport_id' => 1, 'shield' => 'assets/img/chivas.png'],
            ['name' => 'Leones de Occidente', 'state' => 'Nayarit', 'city' => 'Tepic', 'sport_id' => 1, 'shield' => 'assets/img/cruzazul.png'],
            ['name' => 'Halcones del Istmo', 'state' => 'Oaxaca', 'city' => 'Oaxaca de Juárez', 'sport_id' => 1, 'shield' => 'assets/img/getafe.png'],
            ['name' => 'Pumas Sureños', 'state' => 'Chiapas', 'city' => 'Tuxtla Gutiérrez', 'sport_id' => 1, 'shield' => 'assets/img/girona.png'],
            ['name' => 'Jaguares del Golfo', 'state' => 'Tabasco', 'city' => 'Villahermosa', 'sport_id' => 1, 'shield' => 'assets/img/liverpool.png'],
            ['name' => 'Lobos del Altiplano', 'state' => 'Puebla', 'city' => 'Puebla', 'sport_id' => 1, 'shield' => 'assets/img/mancity.png'],
            ['name' => 'Venados del Norte', 'state' => 'Chihuahua', 'city' => 'Chihuahua', 'sport_id' => 1, 'shield' => 'assets/img/milan.png'],
            ['name' => 'Caballos del Desierto', 'state' => 'Sonora', 'city' => 'Hermosillo', 'sport_id' => 1, 'shield' => 'assets/img/realmadrird.png'],
            ['name' => 'Toros del Bajío', 'state' => 'Querétaro', 'city' => 'Querétaro', 'sport_id' => 1, 'shield' => 'assets/img/tigres.png'],
            ['name' => 'Águilas del Valle', 'state' => 'Hidalgo', 'city' => 'Pachuca', 'sport_id' => 1, 'shield' => 'assets/img/villareal.png'],
            ['name' => 'Gatos Negros', 'state' => 'Colima', 'city' => 'Colima', 'sport_id' => 1, 'shield' => 'assets/img/manunited.png'],
            ['name' => 'Fénix de Occidente', 'state' => 'Michoacán', 'city' => 'Morelia', 'sport_id' => 1, 'shield' => 'assets/img/juve.png'],
        ];
        
        foreach ($teams as $team) {
            Team::create($team);
        }

    }
}
