<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobno');
            $table->string('aadharno');
            $table->string('usertype')->nullable();
            $table->string('gender');
            $table->string('address');
            $table->integer('pincode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->Image('uploadfile');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
