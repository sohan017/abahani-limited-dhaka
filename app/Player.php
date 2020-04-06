<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ["name", "dob", "img", "jersy_no", "address", "city", "state", "country", "nationality", "gender", "hight", "weight", "religion", "national_id_number", "birth_certificet_number", "team_id", "playertype_id", "email", "password"];

    
    public function playerType()
    {
    	return $this->belongsTo(Playertype::class, "playertype_id");
    }

    
    public function team()
    {
    	return $this->belongsTo(Team::class, "team_id");
    }

    public function playerAuctions()
    {
    	return $this->hasMany(PlayerAuction::class);
    }

    public function goals()
    {
    	return $this->hasMany(Goal::class);
    }

    public function fitnesses()
    {
    	return $this->hasMany(PlayerFitness::class);
    }
}
