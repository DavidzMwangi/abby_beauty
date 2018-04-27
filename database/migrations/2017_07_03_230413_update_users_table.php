<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('picture_name');
            $table->integer('gender');
            $table->string('phone_number');
            $table->string('postal_code');
            $table->string('city');
            $table->string('country');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable();
            $table->string('picture_name');
            $table->integer('gender');
            $table->string('phone_number');
            $table->string('postal_code')->nullable();
            $table->string('city');
            $table->string('country');
        });
    }
}
