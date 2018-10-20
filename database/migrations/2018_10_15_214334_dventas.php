<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('dventas', function (Blueprint $table) {
            $table->increments('iddv');
            $table->integer('idv')->unsigned();
            $table->foreign('idv')->references('idv')->on('ventas');
            $table->string('cantidad',10);
            $table->integer('idp')->unsigned();
            $table->foreign('idp')->references('idp')->on('productos');
            $table->string('costo',20);
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('dventas');
    }
}
