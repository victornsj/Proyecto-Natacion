<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dpcursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
        Schema::create('dpcursos', function (Blueprint $table) {
            $table->increments('iddpc');
            $table->integer('idpc')->unsigned();
            $table->foreign('idpc')->references('idpc')->on('pcursos');
            $table->integer('ida')->unsigned();
            $table->foreign('ida')->references('ida')->on('alumnos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('dpcursos');
    }
}