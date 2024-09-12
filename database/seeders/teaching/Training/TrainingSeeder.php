<?php

namespace Database\Seeders\Teaching\Training;

use App\Models\Teaching\Training\TrainingManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrainingManagement::factory()->count(10)->create();
    }
}
