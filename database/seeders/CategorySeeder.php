<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::factory()->create(['name' => 'Armed']);
        Category::factory()->create(['name' => 'Civil']);
        Category::factory()->create(['name' => 'F.G Employee']);
        Category::factory()->create(['name' => 'Sports']);
    }
}
