<?php

namespace Database\Seeders\teaching;

use App\Models\Teaching\SubjectManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectManagementSeeder extends Seeder
{
    /**
     * data test
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectManagement::factory()->count(10)->create();
    }
}
