<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('playertype_id');
            $table->integer('coach_id');
            $table->text('dob');
            $table->text('img');
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('nationality');
            $table->string('gender');
            $table->double('hight', 3,2);;
            $table->string('weight');
            $table->string('religion');
            $table->string('national_id_number');
            $table->string('birth_certificet_number');
            $table->string('email');
            $table->string('password');
            $table->text('verification_no');
            $table->boolean('is_played')->default(false);
            $table->string('ap_fee');
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
        Schema::dropIfExists('trainees');
    }
}
