<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('siswa', function (Blueprint $table) {
          $table->string('nomor_induk', 10)->primary();
          $table->string('nama');
          $table->string('jk', 10);
          $table->string('ttl');
          $table->string('agama');
          $table->integer('anak');
          $table->string('status');
          $table->text('alamat');
          $table->string('telpon_siswa');
          $table->string('kelas_masuk');
          $table->string('tgl_masuk');
          $table->string('semester');
          $table->string('sekolah_asal');
          $table->text('alamat_sekolah');
          $table->string('thn_ijazah', 4);
          $table->string('no_ijazah');
          $table->string('thn_stl', 4);
          $table->string('no_stl');
          $table->string('ayah');
          $table->string('ibu');
          $table->text('alamat_ortu');
          $table->string('telepon_ortu', 13);
          $table->string('pekerjaan_ayah');
          $table->string('pekerjaan_ibu');
          $table->string('wali');
          $table->string('alamat_wali');
          $table->string('telepon_wali');
          $table->string('pekerjaan_wali');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswa');
    }
}
