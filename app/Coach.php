<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coach extends Authenticatable
{
    use Notifiable;

	protected $guard = 'coach';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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
