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
            $table->string('con_num')->nullable();
            $table->integer('playertype_id')->nullable();
            $table->integer('coach_id')->nullable();
            $table->string('dob')->nullable();
            $table->text('img')->nullable();
            $table->text('address')->nullable();
            $table->string('contact_num')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->double('hight', 3,2)->nullable();
            $table->string('weight')->nullable();
            $table->string('religion')->nullable();
            $table->string('national_id_number')->nullable();
            $table->string('birth_certificet_number')->nullable();
            $table->string('email');
            $table->string('password');
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_played')->default(false);
            $table->string('ap_fee')->default("Unpaid");
            $table->timestamp('email_verified_at')->nullable();
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
