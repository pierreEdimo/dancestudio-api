<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_classrooms', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned(); 
            $table->bigInteger('classroom_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::dropIfExists('user_classrooms');
    }
}
