<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('match_number', 100);
            $table->integer('turnament_id');
            $table->integer('match_vanue_id');
            $table->integer('team_id');
            $table->integer('oponent_club_id');
            $table->string('home_away');
            $table->string('date');
            $table->string('time');
            $table->string('result');
            $table->string('decided_by');
            $table->string('gd_point');
            $table->string('pts');
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
        Schema::dropIfExists('matches');
    }
}
