<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SectionSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\AcademicRecordSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            SubjectSeeder::class,
            SectionSeeder::class,
            StudentSeeder::class,
            AcademicRecordSeeder::class,
        ]);
    }
}
