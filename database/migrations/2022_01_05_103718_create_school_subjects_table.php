<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('school_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_subjects');
    }
}