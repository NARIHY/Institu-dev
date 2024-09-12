<?php

namespace Database\Factories\Teaching\Training;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teaching\Training\TrainingManagement>
 */
class TrainingManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'training_name' => $this->faker->word,
            'training_description' => $this->faker->sentence,
        ];
    }
}
