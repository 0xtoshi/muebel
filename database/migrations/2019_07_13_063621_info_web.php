<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoWeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        /*
    

            'judul' => '',
            'diskripsi' => '',
            'nama_toko' => '',
            'telp_toko' => '',

        */
        Schema::create('info_web', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_toko');
            $table->string('alamat_toko');
            $table->string('alamat_email');
            $table->string('no_telp');
            $table->string('jam_kerja');
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
        Schema::dropIfExists('info_web');
    }
}
