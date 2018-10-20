<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('ida');
            $table->string('nombre',20);
            $table->string('apellidop',20);
            $table->string('apellidom',20);
            $table->string('direccion',50);
            $table->string('historialm',20);
            $table->string('foto',20);
            $table->integer('idn')->unsigned();
            $table->foreign('idn')->references('idn')->on('niveles');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('alumnos');
    }
}