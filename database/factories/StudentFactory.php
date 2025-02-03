<?php

namespace Database\Factories;

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
}
