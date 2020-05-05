<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('dob');
            $table->text('img');
            $table->string('jersy_no');
            $table->text('con_num')->nullable();
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('nationality');
            $table->string('gender');
            $table->double('hight', 3,2);
            $table->string('weight');
            $table->string('religion');
            $table->string('national_id_number');
            $table->string('birth_certificet_number');
            //$table->string('position');
            // $table->string('coach_id');
            $table->integer('team_id');
            $table->integer('playertype_id');
            //$table->string('physio_id');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('players');
    }
}
