<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subscriber extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

	protected $guard = 'subscriber';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'name', 'email', 'password',
    ];

    protected $fillable = ["name", "img", "contact_num", "address", "email", "password"];

	 public function buyTickets()
	 {
	 	return $this->hasMany(BuyTicket::class);
	 } 
}
