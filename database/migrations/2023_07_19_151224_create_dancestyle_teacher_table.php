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
        Schema::create('dancestyle_teacher', function (Blueprint $table) {
            $table->unsignedBigInteger('dancestyle_id');
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();

            $table->foreign('dancestyle_id')->references('id')->on('dancestyles')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dancestyle_teacher');
    }
};
