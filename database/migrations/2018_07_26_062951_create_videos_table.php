<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('description_id')->unsigned();
            $table->index('description_id');
            $table->foreign('description_id')
                  ->references('id')
                  ->on('descriptions')
                  ->onDelete('cascade');
            
            $table->string('name')->nullable();
            $table->string('path');
            $table->string('thumbnail_path')->nullable();
            $table->integer('size');
            $table->string('mime_type');
            $table->string('extension');
            
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
        Schema::drop('videos');
    }
}