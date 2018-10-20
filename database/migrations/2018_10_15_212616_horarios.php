<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('idh');
            $table->string('hora',10);    
            $table->rememberToken();
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::drop('horarios');
    }
}
