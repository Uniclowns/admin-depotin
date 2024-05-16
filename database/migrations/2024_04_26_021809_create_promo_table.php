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
        Schema::create('promo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id');
            $table->foreignId('admin_id');
            $table->string('nama_promo');
            $table->string('deskripsi_promo');
            $table->string('syarat_ketentuan');
            $table->dateTime('masa_berlaku');
            $table->string('min_belanja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo');
    }
};
