<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJntIndonesiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jnt_indonesias', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('kota_jnt');
            $table->string('kode_kota_jnt');
            $table->string('kecamatan_jnt');
            $table->string('kode_jnt');
            $table->string('kode_pos');
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
        Schema::dropIfExists('jnt_indonesias');
    }
}
