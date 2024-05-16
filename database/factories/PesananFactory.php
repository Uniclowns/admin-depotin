<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesanan>
 */

class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mitra_id' => 1,
            'admin_id' => 1,
            'produk_id' => 1,
            'toko_id' => 1,
            'promo_id' => 1,
            'user_id' => $this->faker->numberBetween(1, 500),
            'driver_id' => $this->faker->numberBetween(1, 50),
            'status_transaksi' => 'Berhasil',
            'total_harga' => $this->faker->numberBetween(10000, 24000),
            'lokasi_pengantaran' => $this->faker->address,
            'rute' => $this->faker->numberBetween(1, 50),
            'jumlah_pemesanan' => $this->faker->numberBetween(1, 10),
            'metode_pembayaran' => 'Transfer Bank',
        ];
    }
}
