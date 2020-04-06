<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OponentClub extends Model
{
    protected $fillable = ["name", "logo", "country", "state"];
    

    public function matchs()
    {
    	return $this->hasMany(Match::class);
    }
}
