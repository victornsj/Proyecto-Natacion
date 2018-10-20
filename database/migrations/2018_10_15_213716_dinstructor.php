<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dinstructor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('dinstructores', function (Blueprint $table) {
            $table->increments('iddi');
            $table->integer('idi')->unsigned();
            $table->foreign('idi')->references('idi')->on('instructores');
            $table->integer('idh')->unsigned();
            $table->foreign('idh')->references('idh')->on('horarios');
            $table->integer('idd')->unsigned();
            $table->foreign('idd')->references('idd')->on('dias');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('dinstructores');
    }
}
