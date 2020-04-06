<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineeFitnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_fitnesses', function (Blueprint $table) {
            $table->id();
            $table->integer('trainee_id');
            $table->integer('physio_id');
            $table->boolean('is_feet')->default(false);
            $table->string('physio_note');
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
        Schema::dropIfExists('trainee_fitnesses');
    }
}
