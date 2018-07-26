<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theories', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('hypothesis_id')->unsigned();
            $table->index('hypothesis_id');
            $table->foreign('hypothesis_id')
                  ->references('id')
                  ->on('hypotheses')
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
        Schema::drop('theories');
    }
}
