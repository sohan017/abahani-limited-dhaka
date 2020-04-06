<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
     protected $fillable = ["player_auction_id", "bidder_id", "price", "date_time",];

     public function bidder()
     {
     	return $this->belongsTo(Bidder::class, "bidder_id");
     }

     public function playerAuction()
     {
     	return $this->belongsTo(PlayerAuction::class, "player_auction_id");
     }
}
