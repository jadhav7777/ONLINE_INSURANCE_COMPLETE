<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payments', function (Blueprint $table) {
          $table->bigIncrements('id');


          $table->string('aadharno');

          $table->string('carreg');
          $table->string('modelnumber');
          $table->string('chassisnumber');
          $table->string('purchasingdate');
          $table->integer('price');
          $table->integer('amounttobepaid');
          $table->integer('amountidv');
          $table->binary('uploadbill');
          $table->binary('uploadcarphoto');
          $table->binary('uploadchassisnumberphoto');
          $table->binary('uploadfront');
          $table->binary('uploadback');
          $table->date('start');
          $table->date('end');
          $table->string('status');
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
