<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_service', function (Blueprint $table) {
            $table->integer("kd_payment_service")->primary();
            $table->string("nama_ps", 50);
            $table->mediumText("dev_base_url_ps");
            $table->mediumText("prod_base_url_ps");
            $table->mediumText("deskripsi_ps");
            $table->mediumText("url_dokumentasi");
            $table->string("status_ps", 15);
            $table->integer("aktor")->index();
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
        Schema::dropIfExists('payment_service');
    }
}
