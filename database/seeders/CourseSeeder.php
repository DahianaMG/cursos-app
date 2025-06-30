<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::firstOrCreate([
            'title' => 'Algebra y Geometria Analitica',
            'description' => 'Estudio de ecuaciones, funciones y graficos en el plano.',
            'category_id' => 1,
            'created_by' => 1
        ]);

        Course::firstOrCreate([
            'title' => 'Calculo Diferencial e Integral I',
            'description' => 'Introduccion a derivadas e integrales de funciones.',
            'category_id' => 1,
            'created_by' => 1
        ]);

        Course::firstOrCreate([
            'title' => 'Quimica General',
            'description' => 'Fundamentos de la materia, sus propiedades y reacciones.',
            'category_id' => 2,
            'created_by' => 1
        ]);

        Course::firstOrCreate([
            'title' => 'Mecanica, Optica y Sonido',
            'description' => 'Principios basicos del movimiento, luz y ondas sonoras.',
            'category_id' => 2,
            'created_by' => 1
        ]);

        Course::firstOrCreate([
            'title' => 'Informatica',
            'description' => 'Conceptos basicos de computacion y programacion.',
            'category_id' => 4,
            'created_by' => 1
        ]);

        /**Probq4 con
        Course::firstOrCreate([
            'title' => 'Seminario de Ingenieria Modulo I',
            'description' => 'Introduccion al rol profesional del ingeniero y su contexto.',
            'category_id' => 3,
            'created_by' => 1
        ]);

        Course::firstOrCreate([
            'title' => 'Economía y Organización Industrial',
            'description' => 'Fundamentos económicos y estructuras de organización empresarial.',
            'category_id' => 7,
            'created_by' => 1
        ]);
        */
    }
}
