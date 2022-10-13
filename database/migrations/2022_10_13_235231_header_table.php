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
      Schema::create('headers', function (Blueprint $table) {
          $table->id();
          $table->string('title');
          $table->longText('sub_title');
          $table->string('register_button');
          $table->string('trial_button');
          $table->longText('about_first');
          $table->longText('about_second');
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
        Schema::dropIfExists('headers');
    }
};
