<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluation::create([
            'enrollment_id' => '1',
            'score' => '80',
            'feedback' => 'Muy bueno'
        ]);

        Evaluation::create([
            'enrollment_id' => '2',
            'score' => '60',
            'feedback' => 'Aprobado'
        ]);

        Evaluation::create([
            'enrollment_id' => '3',
            'score' => '40',
            'feedback' => 'Insuficiente'
        ]);
    }
}
