<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instructores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->increments('idi');
            $table->string('nombre',20);
            $table->string('apellidop',20);
            $table->string('apellidom',20);
            $table->string('direccion',50);
            $table->string('telefono',10);
            $table->string('rfc',10);
            $table->string('correo',50);            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('instructores');
    }
}
