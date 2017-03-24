<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function(Blueprint $table) {
            $table->increments('id');
            // $table->integer('role_id')->unsigned();
            // $table->integer('student_id')->unsigned();
            $table->string('name');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->rememberToken();
            // $table->boolean('active');
            $table->timestamps();
            // $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
