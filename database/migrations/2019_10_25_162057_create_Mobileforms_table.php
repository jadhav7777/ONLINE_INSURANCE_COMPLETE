<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Mobileforms', function (Blueprint $table) {

              $table->bigIncrements('id');

             $table->string('aadharno');





            $table->string('mobilebrand');
            $table->string('imeinumber');
            $table->string('modelnumber');
            $table->string('purchasingdate');
            $table->string('price');
            $table->integer('amounttobepaid');
            $table->integer('amountidv');
            $table->binary('uploadbill');
            $table->binary('uploadfront');
            $table->binary('uploadback');
            $table->binary('uploadimei');
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
