<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            
            $table->integer('category_id')->unsigned();
            $table->index('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('case_categories')
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
        Schema::drop('cases');
    }
}

