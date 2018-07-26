<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHypothesisPopularityRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hypothesis_popularity_rankings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('hypothesis_id')->unsigned();
            $table->index('hypothesis_id');
            $table->foreign('hypothesis_id')
                  ->references('id')
                  ->on('cases')
                  ->onDelete('cascade');
            
            $table->integer('general_ranking');
            $table->integer('cosigns');
            $table->integer('evidence_cosigns');
            $table->integer('likes');
            $table->integer('evidence_likes');
            $table->integer('comments');
            $table->integer('evidence_comments');
            
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
        Schema::drop('hypothesis_popularity_rankings');
    }
}