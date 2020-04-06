<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerFitness extends Model
{
    protected $fillable = ["player_id", "physio_id", "is_feet", "physio_note"];

    public function physio()
    {
    	return $this->belongsTo(Physio::class, "physio_id");
    }

    public function player()
    {
    	return $this->belongsTo(Player::class, "player_id");
    }
}
