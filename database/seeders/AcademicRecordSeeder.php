<?php

namespace Database\Seeders;

use App\Models\AcademicRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicRecord::factory(80)->create();
    }
}
