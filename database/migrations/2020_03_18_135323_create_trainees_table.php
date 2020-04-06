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
            $table->integer('playertype_id')->nullable();
            $table->integer('coach_id')->nullable();
            $table->string('dob');
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
            $table->string('national_id_number')->nullable();
            $table->string('birth_certificet_number')->nullable();
            $table->string('email');
            $table->string('password');
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_played')->default(false);
            $table->string('ap_fee')->default("Unpaid");
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
        Schema::dropIfExists('trainees');
    }
}
