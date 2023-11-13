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
        Schema::create('ceritacinta_t', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('cover1');
            $table->string('judulcerita1');
            $table->text('cerita1');
            $table->string('cover2');
            $table->string('judulcerita2');
            $table->text('cerita2');
            $table->string('cover3');
            $table->string('judulcerita3');
            $table->text('cerita3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceritacinta_t');
    }
};
