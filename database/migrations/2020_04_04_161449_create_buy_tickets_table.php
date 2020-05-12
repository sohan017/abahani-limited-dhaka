<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id');
            $table->integer('subscriber_id');
            $table->string('vip_qty')->default(0);
            $table->string('normal_qty')->default(0);
            $table->string('classic_qty')->default(0);
            $table->string('vip_price')->default(0);
            $table->string('normal_price')->default(0);
            $table->string('classic_price')->default(0);
            $table->string('sub_total_price');
            $table->integer('discount_id')->default(0);
            $table->string('total_price');
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
        Schema::dropIfExists('buy_tickets');
    }
}
