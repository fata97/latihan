<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaKelasTpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kelas_siswa', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kode_tp', 5);
        $table->string('nomor_induk', 10);
        $table->integer('kelas_id')->unsigned();

        $table->foreign('kode_tp')->references('kode_tp')->on('tp')->OnDelete('cascade');
        $table->foreign('nomor_induk')->references('nomor_induk')->on('siswa')->OnDelete('cascade');
        $table->foreign('kelas_id')->references('id')->on('kelas')->OnDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('kelas_siswa');
    }
}
