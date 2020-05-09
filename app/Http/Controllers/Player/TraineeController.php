<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trainee;

class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::latest()->get();
        return view('common.trainee.index', compact('trainees'));
    }

    public function show($id)
    {
        $trainee = Trainee::findOrFail($id);
        return view('common.trainee.show', compact('trainee'));
    }
}


