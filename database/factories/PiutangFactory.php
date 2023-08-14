<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piutang>
 */
class PiutangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pasien_id' => function (array $attributes) {
                return Pasien::inRandomOrder()->first()->id;
            },
            'tgl_masuk' => fake()->date(),
            'tgl_keluar' => fake()->date(),
            'zaal' => 'A',
            'created_at' => now(),
        ];
    }
}
