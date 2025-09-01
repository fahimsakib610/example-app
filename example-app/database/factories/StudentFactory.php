<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => fake()->name(),
            'address' => fake()->state(),
            'email' => fake()->unique()->safeEmail(),
            'gpa' => fake()->randomFloat(2, 0, 4),
        ];
    }
}