<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserssTable extends Migration
{
    public function up()
    {
        // Schema::create('users', function(Blueprint $table) {
        //     $table->increments('id');
        //     // $table->integer('role_id')->unsigned();
        //     // $table->integer('student_id')->unsigned();
        //     $table->string('name');
        //     $table->string('email',100)->unique();
        //     $table->string('password');
        //     $table->rememberToken();
        //     // $table->boolean('active');
        //     $table->timestamps();
        //     // $table->foreign('student_id')->references('id')->on('students');
        // });
    }
    public function down()
    {
        //
    }
}
