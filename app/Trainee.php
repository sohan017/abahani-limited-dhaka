<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = ["name", "playertype_id", "coach_id", "dob", "img", "address", "city", "state", "country", "nationality", "gender", "hight", "weight", "religion", "national_id_number", "birth_certificet_number", "email", "password", "verification_no", "is_played", "ap_fee"];

    public function playerType()
    {
    	return $this->belongsTo(Playertype::class, "playertype_id");
    }

    public function coach()
    {
    	return $this->belongsTo(Coach::class, "coach_id");
    }

    public function fitnesses()
    {
    	return $this->hasMany(TraineeFitness::class);
    }
}
