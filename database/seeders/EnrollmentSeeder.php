<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enrollment::create([
            'user_id' => '2',
            'course_id' => '1'
        ]);

        Enrollment::create([
            'user_id' => '2',
            'course_id' => '2'
        ]);

        Enrollment::create([
            'user_id' => '2',
            'course_id' => '3'
        ]);
    }
}
