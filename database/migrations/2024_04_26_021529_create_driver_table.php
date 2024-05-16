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
        Schema::create('driver', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->string('nama');
            $table->string('password');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('foto_profil');
            $table->string('ktp');
            $table->string('sim');
            $table->string('skck');
            $table->string('stnk');
            $table->string('ijazah');
            $table->string('skd');
            $table->string('skbn');
            $table->string('bpjs');
            $table->string('plat_kendaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver');
    }
};
