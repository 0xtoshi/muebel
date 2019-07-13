<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PusatBantuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pusat_bantuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_bantuan');
            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->integer('status');
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
        Schema::dropIfExists('pusat_bantuan');
    }
}
