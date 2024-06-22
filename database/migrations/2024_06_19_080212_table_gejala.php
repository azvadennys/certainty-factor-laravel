<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableGejala extends Migration
{
    public function up()
    {
        Schema::create('gejala', function (Blueprint $table) {
            $table->string('kode_gejala',6)->primary();
            $table->string('nama_gejala');
            $table->text('deskripsi_gejala')->nullable();
            $table->string('foto_gejala')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gejala');
    }
}
