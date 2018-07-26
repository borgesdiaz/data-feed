<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_types', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('description_id')->unsigned();
            $table->index('description_id');
            $table->foreign('description_id')
                  ->references('id')
                  ->on('descriptions')
                  ->onDelete('cascade');
            
            $table->string('name');
            $table->decimal('weight');
            
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
        Schema::drop('evidence_types');
    }
}