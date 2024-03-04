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
            $table->integer('admin_id')->nullable();
            $table->string('mempelaipria')->nullable();
            $table->string('mempelaiwanita')->nullable();
            $table->string('judulundangan')->nullable();
            $table->string('tglpernikahan')->nullable();
            $table->string('gmaps')->nullable();
            $table->string('alamat')->nullable();
            $table->string('gedung')->nullable();
            $table->string('kota')->nullable();
            $table->string('domain')->nullable();
            $table->string('paket')->nullable();
            $table->string('harga')->nullable();
            $table->integer('tema_id');
            $table->string('buktitransfer')->nullable();
            $table->dateTime('tanggal_order');
            $table->date('expired')->nullable();
            $table->enum('status', [0, 1]);
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
