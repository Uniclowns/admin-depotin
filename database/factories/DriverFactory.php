<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
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
            'nama' => $this->faker->name,
            'password' => static::$password ??= Hash::make('12345'),
            'alamat' => $this->faker->address,
            'no_hp' => '081234567890',
            'foto_profil' => 'img/Man.png',
            'ktp' => 'img/default-ktp.png',
            'sim' => 'img/default-sim.png',
            'skck' => 'img/default-skck.png',
            'stnk' => 'img/default-stnk.png',
            'ijazah' => 'img/default-ijazah.png',
            'skd' => 'img/default-skd.png',
            'skbn' => 'img/default-skbn.png',
            'bpjs' => 'img/default-bpjs.png',
            'plat_kendaraan' => 'AB 1234 CD',
        ];
    }
}
