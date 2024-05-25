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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nomor_Faktur', 10);
            $table->string('Nama_Barang', 30);
            $table->integer('Harga');
            $table->integer('Quantity');
            $table->string('Satuan', 10);
            $table->integer('Subtotal');
            $table->unsignedBigInteger('id_Penjualan');
            $table->unsignedBigInteger('id_Supplier');
            $table->timestamps();

            $table->foreign('id_Supplier')->references('id')->on('suppliers');
            $table->foreign('id_Penjualan')->references('id')->on('penjualans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
