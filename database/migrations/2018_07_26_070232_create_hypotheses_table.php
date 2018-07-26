<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHypothesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hypotheses', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('mystery_id')->unsigned();
            $table->index('mystery_id');
            $table->foreign('mystery_id')
                  ->references('id')
                  ->on('mysteries')
                  ->onDelete('cascade');
            
            $table->integer('description_id')->unsigned();
            $table->index('description_id');
            $table->foreign('description_id')
                  ->references('id')
                  ->on('descriptions')
                  ->onDelete('cascade');
            
            $table->string('name');
            
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
        Schema::drop('hypotheses');
    }
}