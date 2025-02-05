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
        $medical = Section::factory()->create(['name' => 'Pre Medical']);
        $medical->subjects()->attach([1, 2, 3, 5, 6, 7]);

        $engineering = Section::factory()->create(['name' => 'Pre Engineering']);
        $engineering->subjects()->attach([1, 2, 3, 4, 6, 7]);

        $ics = Section::factory()->create(['name' => 'ICS (Intermidate in Computer Science)']);
        $ics->subjects()->attach([1, 2, 3, 4, 6, 8, 11, 12, 15]);

        $fa = Section::factory()->create(['name' => 'FA']);
        $fa->subjects()->attach([1, 2, 3, 9, 10, 12, 13, 14]);
    }
}
