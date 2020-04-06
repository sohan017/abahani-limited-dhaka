<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    protected $fillable = ["name", "club_name", "contact_num", "email", "password"];

    public function bids()
    {
    	return $this->hasMany(Bid::class);
    }
}
