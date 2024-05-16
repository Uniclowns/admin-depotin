<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promo>
 */
class PromoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pengguna_id' => $this->faker->randomNumber(1, 10),
            'admin_id' => 1,
            'nama_promo' => $this->faker->word,
            'deskripsi_promo' => $this->faker->sentence,
            'syarat_ketentuan' => $this->faker->sentence,
            'masa_berlaku' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'min_belanja' => $this->faker->randomNumber(5),
        ];
    }
}
