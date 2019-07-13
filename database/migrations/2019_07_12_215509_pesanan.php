<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_pesanan');
            $table->integer('status_pesanan');
            $table->string('tanggal_pembelian');
            $table->integer('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('master_barang');
            $table->integer('jumlah_barang');
            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->string('total_bayar');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
