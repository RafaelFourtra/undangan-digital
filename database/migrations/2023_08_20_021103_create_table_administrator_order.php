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
        Schema::create('order_t', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->string('domain')->nullable();
            $table->string('paket');
            $table->string('harga');
            $table->dateTime('tanggal_order');
            $table->date('expired');
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_t');
    }
};
