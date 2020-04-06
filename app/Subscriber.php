<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subscriber extends Authenticatable
{
    use Notifiable;

	protected $guard = 'subscriber';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $fillable = ["name", "contact_num", "address", "email", "password"];

	 public function buyTickets()
	 {
	 	return $this->hasMany(BuyTicket::class);
	 } 
}
