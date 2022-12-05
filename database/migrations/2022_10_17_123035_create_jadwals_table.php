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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('id_mk');
 
            $table->foreign('id_mk')->references('id')->on('mata_kuliahs');

            $table->unsignedBigInteger('id_dosen');
 
            $table->foreign('id_dosen')->references('id')->on('dosens');
            // $table->foreignId('id_mk')->constrained();
            // $table->foreignId('id_dosen')->constrained();
            $table->string('hari');
            $table->string('jam');
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
        Schema::dropIfExists('jadwals');
    }
};
