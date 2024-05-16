<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Mitra;
use App\Models\Pesanan;
use App\Models\Promo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\PesananFactory;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);



//        User::create([
//            'name' => 'Siti',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('12345'),
//        ]);

        Admin::create([
            'nama_pengguna'=> 'Siti',
            'password'=> bcrypt('12345'),
            'no_hp'=> '08123456789',
            'email'=> 'admin@gmail.com',
            'foto_profil'=> ' ',
        ]);

        Pesanan::factory(1500)->create();
        User::factory(500)->create();
        Driver::factory(15)->create();
        Mitra::factory(36)->create();
        Promo::factory(15)->create();
    }
}
