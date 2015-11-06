<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hobby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        
        /*Schema::create('user_hobby', function (Blueprint $table){
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->integer('hobby_id')->unsigned()->index();
            $table->foreign('hobby_id')->references('id')->on('hobby')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hobby');
    }
}
