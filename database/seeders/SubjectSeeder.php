<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::factory()->create(['name' => 'English']);
        Subject::factory()->create(['name' => 'Urdu']);
        Subject::factory()->create(['name' => 'Islamyat']);
        Subject::factory()->create(['name' => 'Math']);
        Subject::factory()->create(['name' => 'Physics']);
        Subject::factory()->create(['name' => 'Computer']);
        Subject::factory()->create(['name' => 'Islmaic History']);
        Subject::factory()->create(['name' => 'Civis']);
        Subject::factory()->create(['name' => 'Computer']);
        Subject::factory()->create(['name' => 'Islamyat Elactive']);
    }
}
