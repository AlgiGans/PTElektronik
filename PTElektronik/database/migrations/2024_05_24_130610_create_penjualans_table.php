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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nomor_Faktur', 10);
            $table->string('Nama_Barang', 30);
            $table->integer('Harga');
            $table->integer('Quantity');
            $table->string('Satuan', 10);
            $table->integer('Subtotal');
            $table->date('Tanggal_Faktur');
            $table->unsignedBigInteger('id_Barang');
            $table->unsignedBigInteger('id_Pelanggan');
            $table->timestamps();

            $table->foreign('id_Barang')->references('id')->on('Produks');
            $table->foreign('id_Pelanggan')->references('id')->on('Pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
