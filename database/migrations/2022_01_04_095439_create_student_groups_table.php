<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('student_groups', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_groups');
    }
}