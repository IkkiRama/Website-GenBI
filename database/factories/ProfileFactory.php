<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
            'nama' => fake()->name(),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => Arr::random(["Laki-laki", "Perempuan"]),
            'golongan_darah' => fake()->randomElement(['A', 'B', 'AB', 'O']),
            'suku_bangsa' => fake()->randomElement(['Jawa', 'Sunda', 'Batak', 'Minang']),
            'nama_ayah' => fake()->name('male'),
            'nama_ibu' => fake()->name('female'),
            'dokumen' => fake()->randomElement(['KTP', 'SIM', 'Passport']),
            'wa' => fake()->phoneNumber(),
            'instagram' => fake()->userName(),
            'photo' => fake()->imageUrl(),
            'isKirim' => fake()->boolean()
        ];
    }
}
