<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ["goal_number", "player_id", "match_id", "goal_time", "goal_type", "goal_team", "goal_half"];

    public function player()
    {
    	return $this->belongsTo(Player::class, "player_id");
    }

    public function match()
    {
    	return $this->belongsTo(Match::class, "match_id");
    }
}
