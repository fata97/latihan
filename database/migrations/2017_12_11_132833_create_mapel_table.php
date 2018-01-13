<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mapel', function (Blueprint $table){
        $table->increments('id');
        $table->string('mapel');
        $table->integer('kkm', 3);
        $table->integer('kategori_id')->unsigned();

        $table->foreign('kategori_id')->references('id')->on('kategori')->OnDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('mapel');
    }
}
