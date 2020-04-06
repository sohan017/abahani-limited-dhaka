<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ["name", "match_id", "percent"];

	 public function buyTickets()
	 {
	 	return $this->hasMany(BuyTicket::class);
	 } 
	 
     public function match()
     {
     	return $this->belongsTo(Match::class, "match_id");
     }
}
