<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use App\Coach;
use App\Physio;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $teams= Team::latest()->get();
         return view('player.team.index', compact('teams'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        $coaches = Coach::latest()->get(); 
        $physios = Physio::latest()->get();
        return view('player.team.team-profile', compact('team', 'coaches', 'physios'));
    }

   
}
