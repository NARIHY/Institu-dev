<?php

namespace Database\Factories\Teaching;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teaching\SubjectManagement>
 */
class SubjectManagementFactory extends Factory
{
    /**
     * Default data to test SubjectManagement
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subjectName' => $this->faker->word(),
            'subjectCode' => $this->faker->word(),
            'coefficient' => $this->faker->word(),
        ];
    }
}
