<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Тюлебаев Данияр Абдыгафарович',
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('asdasdasd'),
            'remember_token' => Str::random(10),
            'speciality' => 'СТОМАТОЛОГ-ТЕРАПЕВТ',
            'image' => 'https://stom-assistance.kz/wp-content/uploads/2021/03/IMG_6530-1-1587x2048.jpg',
            'type' => fake()->numberBetween(2, 3),
            'biography' => 'Данияр Абдыгафарович владеет современными навыками исправления прикуса: установкой брекетов; установкой съемных и несъемных пластинок; элайнеров; микровинтов.',
        ];
    }

    /**
     * Indicate that the models email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
