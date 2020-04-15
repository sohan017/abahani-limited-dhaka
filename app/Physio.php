<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Physio extends Authenticatable
{
    use Notifiable;

    protected $guard = 'physio';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     protected $fillable = ["name","img", "spacalize", "address","city","state","country","nationality","gender","religion","national_id_number","birth_certificet_number","email","password"];

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
