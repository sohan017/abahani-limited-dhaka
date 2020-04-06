<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = ["name", "start_time", "end_time", "auction_detail"];

    public function playerActions()
    {
    	return $this->hasMany(PlayerAuction::class);
    }
}
