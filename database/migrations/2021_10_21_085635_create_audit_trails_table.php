<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_trails', function (Blueprint $table) {
            $table->increments('kd_audit_trail');
            $table->integer('fk_kd_user')->index();
            $table->string('nama_form', 100);
            $table->string('nama_field', 100);
            $table->mediumText('value_sebelumnya');
            $table->mediumText('value_terbaru');
            $table->string('jenis_kegiatan', 10);
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
        Schema::dropIfExists('audit_trails');
    }
}
