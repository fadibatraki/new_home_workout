<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gender');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string ('bodyshape');
            $table->string('focusgoal');
            $table->integer('targetweight');
            $table->integer('workoutdays');
            $table->string('sensitivecases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
