<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate([
            'name' => 'Matematicas y Estadistica',
            'description' => 'Fundamentos numericos, analisis cuantitativo y tecnicas de modelado matematico.'
        ]);

        Category::firstOrCreate([
            'name' => 'Ciencias basicas',
            'description' => 'Principios esenciales de la fisica, quimica, biologia y otras ciencias naturales.'
        ]);

        Category::firstOrCreate([
            'name' => 'Ingenieria y Tecnologia',
            'description' => 'Aplicacion de conocimientos tecnicos para diseñar, analizar y construir soluciones innovadoras.'
        ]);

        Category::firstOrCreate([
            'name' => 'Ciencias de la Computacion e Informatica',
            'description' => 'Desarrollo de software, sistemas computacionales y procesamiento de informacion.'
        ]);

        Category::firstOrCreate([
            'name' => 'Formacion Integral y Complementaria',
            'description' => 'Desarrollo de habilidades transversales, pensamiento critico, etica profesional y comunicacion.'
        ]);

        /**Probq4 con
        Category::firstOrCreate([
            'name' => 'Ciencias Sociales y Humanidades',
            'description' => 'Estudio del comportamiento humano, la sociedad y la cultura.'
        ]);

        Category::firstOrCreate([
            'name' => 'Ciencias Económicas y Administrativas',
            'description' => 'Gestión de recursos, empresas y sistemas económicos.'
        ]);
        */
    }
}
