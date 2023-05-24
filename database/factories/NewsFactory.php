<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ' Что такое телемедицина и обслуживание клиентов телездравоохранения?',
            'body' => fake()->text(),
            'image' => 'https://orbital-dent.ru/wp-content/uploads/2022/02/img_20211218_184927-1024x768.jpg',
        ];
    }
}
