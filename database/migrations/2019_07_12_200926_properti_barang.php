<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropertiBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properti_barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi_foto');
            $table->integer('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('master_barang');
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
        Schema::dropIfExists('properti_barang');
    }
}
