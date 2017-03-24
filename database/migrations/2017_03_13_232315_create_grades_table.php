<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function(Blueprint $table){
            $table->increments('id');
            $table->integer('students_id');
            $table->integer('subjects_code')->unsigned();
            $table->integer('grade');
            $table->timestamps();
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subjects_code')->references('subjects_id')->on('courses_subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
