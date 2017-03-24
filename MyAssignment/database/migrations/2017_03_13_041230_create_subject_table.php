<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    public function up()
    {
        // Schema::create('subject', function(Blueprint $table){
        //     $table->increments('id', 50);
        //     $table->string('subject_name', 50);
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
    }
    public function down()
    {
        //
    }
}
