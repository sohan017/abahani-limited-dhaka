<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnament extends Model
{
    protected $fillable = ["name", "start_date", "end_date"];

    public function matchs()
    {
    	return $this->hasMany(Match::class);
    }
}
