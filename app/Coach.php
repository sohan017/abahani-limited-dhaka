<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ["name", "dob","img","address","city","state","country","nationality","gender","hight","religion","national_id_number","email","password"];


    public function team()
    {
    	return $this->hasOne(Team::class);
    }

    public function trainees()
    {
    	return $this->hasMany(Trainee::class);
    }
}
