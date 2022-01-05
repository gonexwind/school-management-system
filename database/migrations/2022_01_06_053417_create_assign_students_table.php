<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('assign_students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('student_id')->comment('user_id=student_id');
            $table->integer('class_id');
            $table->integer('year_id');
            $table->integer('group_id')->nullable();
            $table->integer('shift_id')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assign_students');
    }
}