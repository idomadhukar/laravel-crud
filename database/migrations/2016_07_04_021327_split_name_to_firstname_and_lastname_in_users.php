<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SplitNameToFirstnameAndLastnameInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('name');
        });

        Schema::table('users', function (Blueprint $table) {

            $table->string('first_name');
            $table->string('last_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('first_name');
            $table->dropColumn('last_name');

        });
        Schema::table('users', function (Blueprint $table) {

            $table->string('name');


        });

    }
}
