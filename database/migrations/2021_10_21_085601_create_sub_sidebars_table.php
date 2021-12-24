<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sidebars', function (Blueprint $table) {
            $table->increments("kd_sub_sidebar");
            $table->unsignedInteger("fk_kd_sidebar");
            $table->string("nama_sub_sidebar", 100);
            $table->boolean("status_sub_sidebar");
            $table->integer("urutan_sub_sidebar");
            $table->timestamps();

            $table->foreign("fk_kd_sidebar")->references("kd_sidebar")->on("sidebars")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_sidebars');
    }
}
