<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('idv');
            $table->string('fecha',20);
            $table->integer('ida')->unsigned();
            $table->foreign('ida')->references('ida')->on('alumnos');
            $table->integer('idu')->unsigned();
            $table->foreign('idu')->references('idu')->on('usuarios');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('ventas');
    }
}
