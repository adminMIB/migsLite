<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClientKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_key', function (Blueprint $table) {
            $table->integer("kd_client_key")->primary();
            $table->string("nama_client_key", 50);
            $table->mediumText("client_secret");
            $table->string("client_key_status", 10)->default("ACTIVE");
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
        Schema::dropIfExists('client_key');
    }
}
