<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('idc');
            $table->integer('idn')->unsigned();
            $table->foreign('idn')->references('idn')->on('niveles');
            $table->string('fechai',20);
            $table->string('fechaf',20);
            $table->integer('idi')->unsigned();
            $table->foreign('idi')->references('idi')->on('instructores');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('cursos');
    }
}
