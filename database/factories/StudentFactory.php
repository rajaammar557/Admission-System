<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->firstName(),
            'father_name' => $this->faker->lastName(),
            'profession' => $this->faker->jobTitle,
            'mobile_number' => $this->faker->phoneNumber(),
            'whatsapp_number' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->date,
            'religion' => 'Islam',
            'present_address' => $this->faker->address,
            'permanent_address' => $this->faker->address,
            'last_institution' => $this->faker->name,
            'scholarship' => $this->faker->randomElement(['yes', 'no']),
            'section_id' => rand(1, 4),
            'category_id' => rand(1, 4),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Student $student) {
            if ($student->section->id == Section::Pre_Medical) {
                $subjects = [1, 2, 3, 5, 6, 7];
            } else if ($student->section->id == Section::Pre_Engineering) {
                $subjects = [1, 2, 3, 4, 6, 7];
            } else if ($student->section->id == Section::Ics) {
                $subjects = [1, 2, 3, 4, 8, 6];
            } else if ($student->section->id == Section::Fa) {
                $subjects = [1, 2, 3, 13, 9, 14];
            }
            $student->subjects()->attach($subjects);
        });
    }
}
