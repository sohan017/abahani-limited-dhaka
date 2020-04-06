<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Bidder extends Authenticatable
{
    use Notifiable;
    
	protected $guard = 'bidder';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = ["name", "club_name", "contact_num", "email", "password"];

    public function bids()
    {
    	return $this->hasMany(Bid::class);
    }
}
