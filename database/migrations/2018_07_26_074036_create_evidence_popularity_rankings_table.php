<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencePopularityRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_popularity_rankings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('evidence_id')->unsigned();
            $table->index('evidence_id');
            $table->foreign('evidence_id')
                  ->references('id')
                  ->on('evidence')
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
        Schema::drop('evidence_popularity_rankings');
    }
}