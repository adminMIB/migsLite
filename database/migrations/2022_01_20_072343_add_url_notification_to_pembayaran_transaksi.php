<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlNotificationToPembayaranTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembayaran_transaksi', function (Blueprint $table) {
            $table->mediumText("url_notifikasi")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran_transaksi', function (Blueprint $table) {
            $table->dropColumn("url_notifikasi");
        });
    }
}
