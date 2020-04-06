<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('logo');
            $table->string('captain');
            $table->integer('coach_id');
            $table->integer('physio_id');
            //$table->integer('win');
            //$table->integer('loss');
            //$table->integer('draw');
            //$table->integer('goal_for');
            //$table->integer('goal_against');
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
        Schema::dropIfExists('teams');
    }
}
