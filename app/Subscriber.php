<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ["name", "contact_num", "address", "email", "password"];

	 public function buyTickets()
	 {
	 	return $this->hasMany(BuyTicket::class);
	 } 
}
