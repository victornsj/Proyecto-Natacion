<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pcursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('pcursos', function (Blueprint $table) {
            $table->increments('idpc');
            $table->integer('idn')->unsigned();
            $table->foreign('idn')->references('idn')->on('niveles');
            $table->string('costo',20);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('pcursos');
    }
}
