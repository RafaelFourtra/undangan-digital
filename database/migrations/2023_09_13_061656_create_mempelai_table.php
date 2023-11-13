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
        Schema::create('mempelai_t', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('namalengkaplaki');
            $table->string('namalengkapperempuan');
            $table->string('namalaki');
            $table->string('namaperempuan');
            $table->string('namabapaklaki');
            $table->string('namabapakperempuan');
            $table->string('namaibulaki');
            $table->string('namaibuperempuan');
            $table->string('fotolaki');
            $table->string('fotoperempuan');
            $table->string('urutananak_laki');
            $table->string('urutananak_perempuan');
            $table->string('instagram_laki');
            $table->string('instagram_perempuan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mempelai_t');
    }
};
