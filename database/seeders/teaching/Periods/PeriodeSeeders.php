<?php

namespace Database\Seeders\Teaching\Periods;

use App\Models\Teaching\PeriodeManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PeriodeManagement::factory()->count(15)->create();
    }
}
