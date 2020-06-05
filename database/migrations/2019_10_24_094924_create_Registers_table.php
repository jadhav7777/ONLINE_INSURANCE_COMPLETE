<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Registers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Fullname');
            $table->date('Bday');
            $table->string('Email');
            $table->integer('Mobile');
            $table->string('Gender');
            $table->string('Address');
            $table->string('City');
            $table->integer('Pin_Code');
            $table->integer('Aadhar');
            $table->string('State');
            $table->string('Country');
            $table->binary('uploadfile');


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
        //
    }
}
