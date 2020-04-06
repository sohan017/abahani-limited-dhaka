<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physio extends Model
{
     protected $fillable = ["name","img","address","city","state","country","nationality","gender","religion","national_id_number","birth_certificet_number","email","password"];

    public function team()
    {
    	return $this->hasOne(Team::class);
    }

    public function traineeFitnesses()
    {
    	return $this->hasMany(TraineeFitness::class);
    }

    public function playerFitnesses()
    {
    	return $this->hasMany(PlayerFitness::class);
    }
}
