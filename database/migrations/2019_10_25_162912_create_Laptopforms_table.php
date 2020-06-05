<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //



        Schema::create('Laptopforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('aadharno');

            $table->string('laptopbrand');
            $table->string('serialnumber');
            $table->string('modelnumber');
            $table->string('productnumber');
            $table->string('purchasingdate');
            $table->integer('price');
            $table->integer('amounttobepaid');
            $table->integer('amountidv');
            $table->binary('uploadbill');
            $table->binary('uploadfront');
            $table->binary('uploadback');
            $table->binary('uploadserialnumber');
            $table->date('start');
            $table->date('end');
    $table->string('status');


            $table->timestamps();
        });  //
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
