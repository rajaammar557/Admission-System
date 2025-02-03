<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::factory()->create(['name' => 'Pre Medical']);
        Section::factory()->create(['name' => 'Pre Engineering']);
        Section::factory()->create(['name' => 'ICS (Intermidate in Computer Science)']);
        Section::factory()->create(['name' => 'Pre Medical']);
    }
}
