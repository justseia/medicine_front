<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asdasdasd'),
            'remember_token' => Str::random(10),
            'image' => 'https://media.istockphoto.com/id/1309328823/photo/headshot-portrait-of-smiling-male-employee-in-office.jpg?b=1&s=170667a&w=0&k=20&c=MRMqc79PuLmQfxJ99fTfGqHL07EDHqHLWg0Tb4rPXQc=',
            'type' => 1,
            'biography' => fake()->text() . fake()->text() . fake()->text() . fake()->text(),
        ]);
        \App\Models\User::factory(5)->create();
        \App\Models\News::factory(5)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\Price::factory(100)->create();

        $date = [
            ['id' => 1, 'time' => '9:00'],
            ['id' => 2, 'time' => '9:30'],
            ['id' => 3, 'time' => '10:00'],
            ['id' => 4, 'time' => '10:30'],
            ['id' => 5, 'time' => '11:00'],
            ['id' => 6, 'time' => '11:30'],
            ['id' => 7, 'time' => '12:00'],
            ['id' => 8, 'time' => '12:30'],
            ['id' => 9, 'time' => '13:00'],
            ['id' => 10, 'time' => '13:30'],
            ['id' => 11, 'time' => '14:00'],
            ['id' => 12, 'time' => '14:30'],
            ['id' => 13, 'time' => '15:00'],
            ['id' => 14, 'time' => '15:30'],
            ['id' => 15, 'time' => '16:00'],
            ['id' => 16, 'time' => '16:30'],
            ['id' => 17, 'time' => '17:00'],
            ['id' => 18, 'time' => '17:30'],
        ];
        for ($i = 0; $i < 18; $i++) {
            \App\Models\Time::factory()->create([
                'time' => $date[$i]['time']
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
