<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ["name", "logo", "captain", "coach_id", "physio_id"];

    
    public function players()
    {
    	return $this->hasMany(Player::class);
    }

    public function matchs()
    {
    	return $this->hasMany(Match::class);
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class, "coach_id");
    }

    public function physio()
    {
        return $this->belongsTo(Physio::class, "physio_id");
    }
}

