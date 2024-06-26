<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('catatan');
            $table->integer('kuantitas');
            $table->integer('total_harga_item');
            $table->unsignedBigInteger('produk_id'); 
            $table->unsignedBigInteger('pembelian_id'); 
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('pembelian_id')->references('id')->on('pembelians')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
