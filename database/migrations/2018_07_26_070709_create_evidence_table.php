<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('type_id')->unsigned();
            $table->index('type_id');
            $table->foreign('type_id')
                  ->references('id')
                  ->on('evidence_types')
                  ->onDelete('cascade');
            
            $table->integer('description_id')->unsigned();
            $table->index('description_id');
            $table->foreign('description_id')
                  ->references('id')
                  ->on('descriptions')
                  ->onDelete('cascade');
            
            $table->integer('image_id')->nullable();
            $table->integer('video_id')->nullable();
            $table->integer('audio_id')->nullable();
            
            $table->string('name');
            $table->string('reference');
            $table->string('link');
            
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
        Schema::drop('evidence');
    }
}