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

    public function getMatchsResult()
    {
        $data = array(
            "win" => 0,
            "drow" => 0,
            "lost" => 0,
            "gf" => 0,
            "ga" => 0,
            "gd" => 0,
            "pts" => 0,
        );
        foreach($this->matchs as $match){
            if($match->result == "win") $data["win"] += 1;
            elseif($match->result == "drow") $data["drow"] += 1;
            elseif($match->result == "lost") $data["lost"] += 1;

            $data["gf"] += $match->gf;
            $data["ga"] += $match->ga;
            $data["pts"] += $match->pts;
        }
        $data["gd"] = $data["gf"] - $data["ga"];

        return $data;
    }
}

