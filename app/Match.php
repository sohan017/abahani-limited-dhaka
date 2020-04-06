<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ["name", "match_number", "turnament_id", "match_vanue_id", "team_id", "oponent_club_id", "home_away","date", "time", "result", "decided_by", "gd_point", "pts"];


    public function turnament()
    {
    	return $this->belongsTo(Turnament::class, "turnament_id");
    }

    public function matchVanue()
    {
    	return $this->belongsTo(Matchvenue::class, "match_vanue_id");
    }

    public function team()
    {
    	return $this->belongsTo(Team::class, "team_id");
    }

    public function opnentClub()
    {
    	return $this->belongsTo(OponentClub::class, "oponent_club_id");
    }

    public function tickets()
    {
    	return $this->hasMany(Ticket::class);
    }

    public function goals()
    {
    	return $this->hasMany(Goal::class);
    }


}
