<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraineeFitness extends Model
{
    protected $fillable = ["trainee_id", "physio_id", "is_feet", "physio_note"];

    public function trainee()
    {
    	return $this->belongsTo(Trainee::class, "trainee_id");
    }

    public function physio()
    {
    	return $this->belongsTo(Physio::class, "physio_id");
    }


}
