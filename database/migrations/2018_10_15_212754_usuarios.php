<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idu');
            $table->string('nombre',20);
            $table->string('apellidop',20);
            $table->string('apellidom',20);
            $table->string('correo',50);
            $table->string('telefono',10);
            $table->string('contrasena',30);
            $table->string('tipo',10);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('usuarios');
    }
}