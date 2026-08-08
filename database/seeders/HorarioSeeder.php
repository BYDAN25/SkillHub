<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($clase = 1; $clase <= 5; $clase++) {

            Horario::create([
                'clase_id' => $clase,
                'fecha' => now()->addDays($clase),
                'hora_inicio' => '09:00:00',
                'hora_fin' => '11:00:00',
                'lugares_disponibles' => 20
            ]);

            Horario::create([
                'clase_id' => $clase,
                'fecha' => now()->addDays($clase + 2),
                'hora_inicio' => '15:00:00',
                'hora_fin' => '17:00:00',
                'lugares_disponibles' => 20
            ]);
        }
    }
}