<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clase::create([
            'categoria_id' => 1,
            'ubicacion_id' => 1,
            'nivel_id' => 1,
            'nombre' => 'Laravel desde Cero',
            'descripcion' => 'Aprende Laravel desde los fundamentos.',
            'instructor' => 'Carlos Hernández',
            'duracion' => 120,
            'costo' => 350,
            'cupo_maximo' => 20,
            'imagen' => null
        ]);

        Clase::create([
            'categoria_id' => 2,
            'ubicacion_id' => 2,
            'nivel_id' => 2,
            'nombre' => 'MySQL Profesional',
            'descripcion' => 'Diseño y administración de bases de datos.',
            'instructor' => 'María López',
            'duracion' => 180,
            'costo' => 500,
            'cupo_maximo' => 25,
            'imagen' => null
        ]);

        Clase::create([
            'categoria_id' => 8,
            'ubicacion_id' => 3,
            'nivel_id' => 3,
            'nombre' => 'Introducción a la Ciberseguridad',
            'descripcion' => 'Conceptos básicos para proteger sistemas.',
            'instructor' => 'José Ramírez',
            'duracion' => 150,
            'costo' => 450,
            'cupo_maximo' => 18,
            'imagen' => null
        ]);

        Clase::create([
            'categoria_id' => 4,
            'ubicacion_id' => 4,
            'nivel_id' => 1,
            'nombre' => 'HTML y CSS',
            'descripcion' => 'Desarrollo de sitios web desde cero.',
            'instructor' => 'Ana Torres',
            'duracion' => 120,
            'costo' => 300,
            'cupo_maximo' => 20,
            'imagen' => null
        ]);

        Clase::create([
            'categoria_id' => 6,
            'ubicacion_id' => 5,
            'nivel_id' => 2,
            'nombre' => 'Introducción a Machine Learning',
            'descripcion' => 'Primeros pasos en Inteligencia Artificial.',
            'instructor' => 'Luis Martínez',
            'duracion' => 180,
            'costo' => 600,
            'cupo_maximo' => 15,
            'imagen' => null
        ]);
    }
}