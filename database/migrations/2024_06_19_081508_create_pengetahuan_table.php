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
        Schema::create('pengetahuan', function (Blueprint $table) {
            $table->string('kode_serum', 6);
            $table->string('kode_gejala', 6);
            $table->float('nilai_cf');
            $table->foreign('kode_gejala')->references('kode_gejala')->on('gejala')->onDelete('cascade');
            $table->foreign('kode_serum')->references('kode_serum')->on('serum')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengetahuan');
    }
};
