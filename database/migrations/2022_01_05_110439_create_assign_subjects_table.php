<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('assign_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('class_id');
            $table->integer('subject_id');
            $table->double('full_mark');
            $table->double('pass_mark');
            $table->double('subjective_mark');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assign_subjects');
    }
}