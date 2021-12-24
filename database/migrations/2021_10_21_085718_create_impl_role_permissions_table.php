<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplRolePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impl_role_permissions', function (Blueprint $table) {
            $table->increments("kd_impl_role_permission");
            $table->integer("fk_kd_role")->index();
            $table->string("fk_kd_permission",100)->index();
            $table->integer("created_by")->index();
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
        Schema::dropIfExists('impl_role_permissions');
    }
}
