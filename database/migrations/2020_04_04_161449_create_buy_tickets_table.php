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
            $table->string('vip_qty');
            $table->string('normal_qty');
            $table->string('classic_qty');
            $table->string('vip_price');
            $table->string('normal_price');
            $table->string('classic_price');
            $table->string('sub_total_price');
            $table->integer('discount_id');
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
