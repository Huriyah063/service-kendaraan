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
        Schema::create('montirs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L'); // L for Laki-laki, P for Perempuan
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
            $table->foreignId('kategori_montir_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montirs');
    }
};
