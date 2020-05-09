<?php

namespace App\Http\Controllers\Coach;

use App\Coach;
use App\Http\Controllers\Controller;
use App\Physio;
use App\Team;
use Illuminate\Http\Request;

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
         return view('common.team.index', compact('teams'));
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
        return view('common.team.team-profile', compact('team', 'coaches', 'physios'));
    }
}
