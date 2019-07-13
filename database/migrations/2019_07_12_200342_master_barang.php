<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('harga');
            $table->string('diskon');
            $table->string('kategori');
            $table->string('merk');
            $table->string('ukuran');
            $table->string('keterangan');
            $table->string('garansi');
            $table->string('stok_barang');
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
        Schema::dropIfExists('master_barang');
    }
}
