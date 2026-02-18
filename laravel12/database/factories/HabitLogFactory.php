<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Habit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, // You can change this to associate with a specific user
            'habit_id' => Habit::query()->inRandomOrder()->first()->id, // You can change this to associate with a specific habit
            'completed_at' => $this->faker->unique()->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
        ];
    }
}
