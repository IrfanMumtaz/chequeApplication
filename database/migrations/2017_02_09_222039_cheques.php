<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class Cheques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->double('amount', 15,2);
            $table->string('amount_inwords');
            $table->integer('approved')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schemo::dropIfExits('cheques');
    }
}
