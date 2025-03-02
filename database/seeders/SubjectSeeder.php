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
        Subject::factory()->create(['name' => 'English', 'compulsory' => 1]); // 1
        Subject::factory()->create(['name' => 'Urdu', 'compulsory' => 1]); // 2
        Subject::factory()->create(['name' => 'Islamyat', 'compulsory' => 1]); // 3
        Subject::factory()->create(['name' => 'Pak Study', 'compulsory' => 1]); // 11
        Subject::factory()->create(['name' => 'Math']); // 4
        Subject::factory()->create(['name' => 'Bio']); // 5
        Subject::factory()->create(['name' => 'Physics', 'selective' => 1]); // 6
        Subject::factory()->create(['name' => 'Chemistry']); // 7
        Subject::factory()->create(['name' => 'Computer']); // 8
        Subject::factory()->create(['name' => 'Islmaic History', 'selective' => 1]); //9
        Subject::factory()->create(['name' => 'Civis', 'selective' => 1]); //10
        Subject::factory()->create(['name' => 'Ecnommics', 'selective' => 1]); // 12
        Subject::factory()->create(['name' => 'Health and Phsical Education', 'selective' => 1]); // 13
        Subject::factory()->create(['name' => 'Islamyat Elactive', 'selective' => 1]); // 14
        Subject::factory()->create(['name' => 'Stats', 'selective' => 1]); // 15
    }
}
