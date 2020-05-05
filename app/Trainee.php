<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Trainee extends Authenticatable  implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'trainee';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = ["name", "con_num", "playertype_id", "coach_id", "dob", "img", "address", "city", "state", "country", "nationality", "gender", "hight", "weight", "religion", "national_id_number", "birth_certificet_number", "email", "password", "is_verified", "is_played", "ap_fee"];

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
