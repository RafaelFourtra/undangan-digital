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
        Schema::create('bukutamu_t', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('kode_tamu');
            $table->string('nama');
            $table->string('group');
            $table->string('whatsapp');
            $table->string('jumlah');
            $table->string('jumlahkehadiran')->nullable();
            $table->enum('status', ['Menunggu', 'Hadir', 'Tidak Hadir'])->default('Menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukutamu_t');
    }
};
