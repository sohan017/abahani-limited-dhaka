<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use App\Trainee;
use App\TraineeFitness;
use App\Physio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraineefitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Physio::with('trainee_fitness')->find(Auth::guard("physio")->id()));
        $physio = Physio::find(Auth::guard("physio")->id());
        $trainees = Trainee::latest()->get();
        return view("physio.trainee-fitness.index", compact('trainees'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainee = Trainee::findOrFail($id);     
        return view('physio.trainee-fitness.traineefitnessnote', compact('trainee'));
    }

    public function add_player_fitness(Request $request, $id)
    {
        TraineeFitness::create([
            "trainee_id" => $id,
            "physio_id" => Auth::id(),
            "physio_note" => $request->physio_note
        ]);

        return redirect()->back()->withSuccess("Helth note added success.");
    }
}
