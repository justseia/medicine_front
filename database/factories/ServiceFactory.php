<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Имплантация зубов в Алматы',
            'image' => 'https://stom-assistance.kz/wp-content/uploads/2019/12/implantacia.jpg',
            'body' => 'В нашем центре прием ведут опытные, высококвалифицированные специалисты: стоматолог-имплантолог, челюстно-лицевой хирург, которые подберут для Вас лучший вариант и метод имплантации зубов.Оснащение:Наличие 3D-компьютерного томографа гарантирует точность установки имплантатов. Также большим преимуществом является то, что наш центр оснащён операционным кабинетом со специальным оборудованием. Мы соблюдаем все нормы стерильности и безопасности.',
        ];
    }
}
