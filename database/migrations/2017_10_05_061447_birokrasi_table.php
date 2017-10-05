<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BirokrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birokrasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jabatan');
            $table->text('nama');
            $table->integer('nip');
            $table->text('foto');
            $table->integer('nohp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
