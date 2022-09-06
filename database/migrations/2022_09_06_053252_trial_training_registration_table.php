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
      Schema::create('register_trial_trainings', function (Blueprint $table) {
          $table->id();
          $table->string('fullname');
          $table->string('aeg');
          $table->string('dancestyles');
          $table->string('email');
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
        Schema::dropIfExists('register_trial_trainings');
    }
};
