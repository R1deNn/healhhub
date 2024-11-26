<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => fake()->numberBetween(153, 178),
            'id_doctor' => fake()->numberBetween(179, 184),
            'id_category' => fake()->numberBetween(1, 5),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'result' => fake()->numberBetween(0, 2),
            'attachment' => fake()->text(),
            'description' => fake()->text(),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
