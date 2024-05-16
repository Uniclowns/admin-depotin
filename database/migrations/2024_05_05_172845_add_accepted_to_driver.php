<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('driver', function (Blueprint $table) {
            $table->boolean('accepted')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('driver', function (Blueprint $table) {
            $table->dropColumn('accepted');
        });
    }
};
