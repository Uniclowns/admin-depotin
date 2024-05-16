<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitra>
 */
class MitraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'admin_id' => 1,
            'username' => $this->faker->userName,
            'password' => static::$password ??= Hash::make('12345'),
            'foto_depot' => 'img/default.jpg',
            'nama_depot' => $this->faker->company,
            'alamat' => $this->faker->address,
            'barcode_qris' => 'img/default.jpg',
        ];
    }
}
