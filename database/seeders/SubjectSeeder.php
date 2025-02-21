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
        Subject::factory()->create(['name' => 'English']);// 1
        Subject::factory()->create(['name' => 'Urdu']);// 2
        Subject::factory()->create(['name' => 'Islamyat']);// 3
        Subject::factory()->create(['name' => 'Math']);// 4
        Subject::factory()->create(['name' => 'Bio']);// 5
        Subject::factory()->create(['name' => 'Physics']);// 6
        Subject::factory()->create(['name' => 'Chemistry']);// 7
        Subject::factory()->create(['name' => 'Computer']);// 8
        Subject::factory()->create(['name' => 'Islmaic History']); //9
        Subject::factory()->create(['name' => 'Civis']); //10
        Subject::factory()->create(['name' => 'Computer']);// 11
        Subject::factory()->create(['name' => 'Ecnommics']);// 12
        Subject::factory()->create(['name' => 'Health and Phsical Education']);// 13
        Subject::factory()->create(['name' => 'Islamyat Elactive']);// 14
        Subject::factory()->create(['name' => 'Stats']);// 15
        Subject::factory()->create(['name' => 'Pak Study']);// 16
    }
}
