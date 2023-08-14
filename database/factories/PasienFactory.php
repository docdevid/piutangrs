<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'no_rm' => fake()->numberBetween(100000, 999999),
            'alamat' => fake()->address(),
            'asli_daerah' => fake()->randomElement(['1', '0']),
            'created_by' => User::
        ];
    }
}
