<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Habit;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habitNames = ['Exercício', 'Leitura', 'Meditação'];
        return [
            'user_id' => 1, // Substitua pelo ID do usuário que deseja associar
            'name' => $this->faker->unique()->randomElement($habitNames),
        ];
    }
}
