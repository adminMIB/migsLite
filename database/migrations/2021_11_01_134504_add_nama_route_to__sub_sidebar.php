<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaRouteToSubSidebar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_sidebars', function (Blueprint $table) {
            $table->string("fk_nama_permission",100)->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_sidebars', function (Blueprint $table) {
            $table->dropColumn("fk_nama_permission",100);
        });
    }
}
