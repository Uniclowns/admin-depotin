<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mitra_id');
            $table->foreignId('admin_id');
            $table->foreignId('produk_id');
            $table->foreignId('toko_id');
            $table->foreignId('promo_id');
            $table->foreignId('user_id');
            $table->foreignId('driver_id');
            $table->string('status_transaksi');
            $table->string('total_harga');
            $table->string('lokasi_pengantaran');
            $table->bigInteger('rute');
            $table->bigInteger('jumlah_pemesanan');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
