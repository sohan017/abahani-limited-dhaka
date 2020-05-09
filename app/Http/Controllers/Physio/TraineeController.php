<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use App\Trainee;
use Illuminate\Http\Request;

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
