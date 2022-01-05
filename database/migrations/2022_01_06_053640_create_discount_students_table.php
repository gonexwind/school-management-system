<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('discount_students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('assign_student_id');
            $table->integer('fee_category_id');
            $table->double('discount')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discount_students');
    }
}