<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beasiswa>
 */
class BeasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tglDibuka = fake()->dateTimeBetween('-1 month', '+1 month');
        $tglDitutup = fake()->dateTimeBetween($tglDibuka, strtotime('+6 months'));

        return [
            'nama_beasiswa' => fake()->words(3, true),
            'tgl_dibuka' => $tglDibuka,
            'tgl_ditutup' => $tglDitutup,
            'deskripsi_beasiswa' => fake()->paragraphs(3, true),
            'pamflet_beasiswa' => fake()->imageUrl(),
        ];
    }
}
