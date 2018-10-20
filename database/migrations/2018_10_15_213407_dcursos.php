<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dcursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
        Schema::create('dcursos', function (Blueprint $table) {
            $table->increments('iddc');
            $table->integer('idc')->unsigned();
            $table->foreign('idc')->references('idc')->on('cursos');
            $table->integer('ida')->unsigned();
            $table->foreign('ida')->references('ida')->on('alumnos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('dcursos');
    }
}
