<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alamat>
 */
class AlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'alamat_saat_ini' => fake()->address(),
            'alamat_asal' => fake()->address(),
            'provinsi' => fake()->state(),
            'kabupaten' => fake()->city(),
        ];
    }
}
