<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_requirement', function(Blueprint $table){
            $table->increments('id');
            $table->integer('degree_id')->unsigned();
            $table->integer('requirement_id')->unsigned();
            $table->timestamps();

            $table->foreign('degree_id')
                ->references('id')
                ->on('degrees')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('requirement_id')
                ->references('id')
                ->on('requirements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('degree_id', 'requirement_id');
        Schema::drop('degree_requirement');
    }
}
