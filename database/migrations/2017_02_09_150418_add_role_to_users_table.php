<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 1)->default('0');
            /** 0 normal
              * 1 sysuper
              * 2 super
              */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function users()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
