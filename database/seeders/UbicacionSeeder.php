<?php

namespace Database\Seeders;

use App\Models\Ubicacion;
use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ubicaciones = [
            [
                'estado' => 'Querétaro',
                'ciudad' => 'El Marqués',
                'direccion' => 'Universidad Politécnica de Querétaro, Carretera Estatal 420 S/N, El Rosario'
            ],
            [
                'estado' => 'Querétaro',
                'ciudad' => 'Santiago de Querétaro',
                'direccion' => 'Centro Educativo y Cultural Manuel Gómez Morín'
            ],
            [
                'estado' => 'Querétaro',
                'ciudad' => 'Santiago de Querétaro',
                'direccion' => 'Parque Tecnológico Querétaro'
            ],
            [
                'estado' => 'Querétaro',
                'ciudad' => 'Corregidora',
                'direccion' => 'Centro de Capacitación Tecnológica'
            ],
            [
                'estado' => 'Querétaro',
                'ciudad' => 'Santiago de Querétaro',
                'direccion' => 'Campus de Innovación y Desarrollo Tecnológico'
            ]
        ];

        foreach ($ubicaciones as $ubicacion) {
            Ubicacion::create($ubicacion);
        }
    }
}