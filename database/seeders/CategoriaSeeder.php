<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Programación',
                'descripcion' => 'Desarrollo de software y programación en distintos lenguajes.'
            ],
            [
                'nombre' => 'Bases de Datos',
                'descripcion' => 'Diseño, administración y optimización de bases de datos.'
            ],
            [
                'nombre' => 'Redes',
                'descripcion' => 'Configuración, administración e interconexión de redes.'
            ],
            [
                'nombre' => 'Desarrollo Web',
                'descripcion' => 'Creación de aplicaciones y sitios web.'
            ],
            [
                'nombre' => 'Ingeniería de Software',
                'descripcion' => 'Análisis, diseño y desarrollo de sistemas de software.'
            ],
            [
                'nombre' => 'Inteligencia Artificial',
                'descripcion' => 'Machine Learning, IA y Sistemas Inteligentes.'
            ],
            [
                'nombre' => 'Sistemas Operativos',
                'descripcion' => 'Administración y funcionamiento de sistemas operativos.'
            ],
            [
                'nombre' => 'Ciberseguridad',
                'descripcion' => 'Protección de sistemas, redes y datos.'
            ],
            [
                'nombre' => 'Virtualización',
                'descripcion' => 'Virtualización, contenedores y tecnologías cloud.'
            ],
            [
                'nombre' => 'Gestión de Proyectos',
                'descripcion' => 'Administración de proyectos tecnológicos.'
            ]
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}