<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cms_users');
            $table->string('id_info_sampah');
            $table->string('subject');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->integer('id_aksi');
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
        Schema::dropIfExists('confirmasi');
    }
}
