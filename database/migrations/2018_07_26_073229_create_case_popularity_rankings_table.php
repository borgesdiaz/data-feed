<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasePopularityRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_popularity_rankings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('case_id')->unsigned();
            $table->index('case_id');
            $table->foreign('case_id')
                  ->references('id')
                  ->on('cases')
                  ->onDelete('cascade');
            
            $table->integer('general_ranking');
            $table->integer('cosigns');
            $table->integer('likes');
            $table->integer('comments');
            
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
        Schema::drop('case_popularity_rankings');
    }
}
