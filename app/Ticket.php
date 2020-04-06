<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = ["match_id", "vip_qty", "normal_qty", "classic_qty", "vip_price", "normal_price", "classic_price"];

     public function match()
     {
     	return $this->belongsTo(Match::class, "match_id");
     }

     public function buyTickets()
     {
     	return $this->hasMany(BuyTicket::class);
     }
}
