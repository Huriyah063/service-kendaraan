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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('layanan_id')->index();
            $table->string('kendaraan');
            $table->string('model');
            $table->text('kelurahan');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('status')->default('pending'); // pending, in_progress, completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
