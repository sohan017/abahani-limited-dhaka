<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyTicket extends Model
{
    protected $fillable = ["ticket_id", "subscriber_id", "vip_qty", "normal_qty", "classic_qty", "vip_price", "normal_price", "classic_price", "sub_total_price", "discount_id", "total_price"];

    public function discounts()
    {
    	return $this->belongsTo(Discount::class, "discount_id");
    }

    public function subscriber()
    {
    	return $this->belongsTo(Subscriber::class, "subscriber_id");
    }

    public function ticket()
    {
    	return $this->belongsTo(Ticket::class, "ticket_id");
    }
}
