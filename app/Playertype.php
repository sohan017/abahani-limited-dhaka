<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playertype extends Model
{
    protected $fillable = ["name"];


    public function players()
    {
    	return $this->hasMany(Player::class);
    }

    public function trainees()
    {
    	return $this->hasMany(Trainee::class);
    }
}
