<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('timetable', function (Blueprint $table) {
          $table->id();
          $table->integer('day');
          $table->string('dancestyle');
          $table->string('lesson_start');
          $table->string('lesson_end');
          $table->string('description')->nullable();
          $table->integer('order_of_lesson');
          $table->integer('hall_size');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetable');
    }
};
