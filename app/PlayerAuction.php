<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerAuction extends Model
{
     protected $fillable = ["auction_id", "player_id", "player_price"];

     public function auction()
     {
     	return $this->belongsTo(Auction::class, "auction_id");
     }

     public function player()
     {
     	return $this->belongsTo(Player::class, "player_id");
     }

     public function bids()
     {
     	return $this->hasMany(Bid::class);
     }
}
