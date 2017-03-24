<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('students', function(Blueprint $table){
            $table->integer('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('middle_initial',2);
            // $table->string('password', 32);
            $table->string('course', 255);
            $table->string('address', 500);
            $table->string('guardian', 100);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        //
    }
}
