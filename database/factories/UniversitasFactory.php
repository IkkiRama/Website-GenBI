<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universitas>
 */
class UniversitasFactory extends Factory
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
            'asal_universitas' => fake()->randomElement(["Universitas Jenderal Soedirman", "Universitas Muhammadiyah Purwokerto", "UIN Saizu"]),
            'fakultas' => fake()->word,
            'jurusan' => fake()->word,
            'semester' => fake()->randomElement(['4', '6']),
            'nim' => fake()->unique()->numerify('##############'),
            'ip' => fake()->randomFloat(2, 2, 3),
            'ipk' => fake()->randomFloat(2, 2, 3),
        ];
    }
}
