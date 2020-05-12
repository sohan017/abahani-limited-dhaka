<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraineeController extends Controller
{
    public function index()
    {
        $coach = Auth::user();
        $trainees = $coach->trainees;
        return view('common.trainee.index', compact('trainees'));
    }

    public function show($id)
    {
        $coach = Auth::user();
        $trainee = $coach->trainees->find($id);
        return view('common.trainee.show', compact('trainee'));
    }
}
