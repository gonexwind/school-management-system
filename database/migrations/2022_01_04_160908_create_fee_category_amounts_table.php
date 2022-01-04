<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeCategoryAmountsTable extends Migration
{
    public function up()
    {
        Schema::create('fee_category_amounts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('fee_category_id');
            $table->integer('class_id');
            $table->double('amount');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fee_category_amounts');
    }
}