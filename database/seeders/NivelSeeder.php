<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveles = [
            [
                'nombre' => 'Básico',
                'descripcion' => 'No se requieren conocimientos previos.'
            ],
            [
                'nombre' => 'Intermedio',
                'descripcion' => 'Se requieren conocimientos básicos.'
            ],
            [
                'nombre' => 'Avanzado',
                'descripcion' => 'Dirigido a personas con experiencia.'
            ]
        ];

        foreach ($niveles as $nivel) {
            Nivel::create($nivel);
        }
    }
}