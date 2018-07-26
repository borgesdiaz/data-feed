<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMysteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysteries', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('case_id')->unsigned();
            $table->index('case_id');
            $table->foreign('case_id')
                  ->references('id')
                  ->on('cases')
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
        Schema::drop('mysteries');
    }
}
