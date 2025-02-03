<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicRecord>
 */
class AcademicRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => rand(1, 59),
            'exam_type' => $this->faker->randomElement(['SSC', 'HSSC']),
            'year' => $this->faker->year(),
            'roll_no' => rand(290120, 609000),
            'marks' => rand(650, 1100),
            'percentage' => rand(9, 100),
            'board' => $this->faker->city(),
            'group' => $this->faker->randomElement(['Science', 'Arts']),
        ];
    }
}
