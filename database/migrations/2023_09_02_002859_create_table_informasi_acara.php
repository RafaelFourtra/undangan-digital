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
        Schema::create('informasiacara_t', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('sampul')->nullable();
            $table->string('pembuka');
            $table->string('judulacara');
            $table->text('deskripsi')->nullable();
            $table->date('tanggalpernikahan');
            $table->time('jamresepsi')->nullable();
            $table->time('jamakadnikah');
            $table->string('lokasiresepsi')->nullable();
            $table->string('lokasiakadnikah');
            $table->text('livestream')->nullable();
            $table->string('googlemapsresepsi')->nullable();
            $table->string('googlemapspernikahan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_m');
    }
};
