<?php

namespace Database\Factories\Teaching;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teaching\PeriodeManagement>
 */
class PeriodeManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        'period_name',
        'period_description',
        'start_date',
        'end_date'
        */
        return [
            'period_name' => $this->faker->word . ' ' . $this->faker->year,
            'period_description' => $this->faker->sentence,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
        ];
    }
}
