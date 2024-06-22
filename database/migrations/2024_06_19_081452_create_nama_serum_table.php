<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serum', function (Blueprint $table) {
            $table->string('kode_serum',6)->primary();
            $table->string('nama_serum');
            $table->text('deskripsi')->nullable();
            $table->string('foto_serum')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serum');
    }
};
