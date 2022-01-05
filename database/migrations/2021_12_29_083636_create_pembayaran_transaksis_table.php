<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_transaksi', function (Blueprint $table) {

            $table->integer("kd_pembayaran_transaksi")->primary();
            $table->mediumText("kode_unik_payment_gateaway");
            $table->string("metode_pembayaran",30);
            $table->string("instansi_pembayaran",50);
            $table->string("invoice_pembayaran",50);
            $table->mediumText("nomor_pembayaran");
            $table->bigInteger("jumlah_dibayarkan");
            $table->string("nama_pembayaran",100);
            $table->string("waktu_kadaluarsa",50);
            $table->string("status_pembayaran",15)->default("MENUNGGU");
            $table->string("waktu_terbayar",50)->nullable();
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
        Schema::dropIfExists('pembayaran_transaksi');
    }
}
