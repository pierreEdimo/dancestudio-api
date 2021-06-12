<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_categories', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned(); 
            $table->bigInteger('classroom_id')->unsigned(); 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_categories');
    }
}
