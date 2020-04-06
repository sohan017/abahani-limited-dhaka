<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchvenue extends Model
{
    protected $fillable = ["name", "city", "country"];
    

    public function matchs()
    {
    	return $this->hasMany(Match::class);
    }
}
