<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('sakit');
        $table->integer('izin');
        $table->integer('alpa');
        $table->string('kode_tp', 5);
        $table->string('nomor_induk', 10);

        $table->foreign('kode_tp')->references('kode_tp')->on('tp')->OnDelete('cascade');
        $table->foreign('nomor_induk')->references('nomor_induk')->on('siswa')->OnDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('absensi');
    }
}
