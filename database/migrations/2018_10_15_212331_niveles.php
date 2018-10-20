<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Niveles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('niveles', function (Blueprint $table) {
            $table->increments('idn');
            $table->string('nivel',20);  
            $table->integer('edad');   
            $table->rememberToken();
            $table->timestamps();        
        });
    }


    public function down()
    {
        Schema::drop('niveles');
    }
}