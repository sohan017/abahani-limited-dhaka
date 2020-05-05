<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physios', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('img');
            $table->string('spacalize');
            $table->string('con_num')->nullable();
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('nationality');
            $table->string('gender');
            $table->string('religion');
            $table->string('national_id_number');
            $table->string('email');
            $table->text('password');
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
        Schema::dropIfExists('physios');
    }
}
