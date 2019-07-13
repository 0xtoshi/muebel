<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PusatPesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pusat_pesan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->integer('id_bantuan')->unsigned();
            $table->foreign('id_bantuan')->references('id')->on('pusat_bantuan');
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
        Schema::dropIfExists('pusat_pesan');
    }

}