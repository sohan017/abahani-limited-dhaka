<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Player;
use App\Team;
use App\Match;
use App\Matchvenue;
use App\Turnament;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals= Goal::latest()->get();
         return view("admin.goal.index", compact('goals')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         $players = Player::latest()->get();
         $teams = Team::latest()->get();
         $matchs = Match::latest()->get();
         $matchvenues = Matchvenue::latest()->get();
         $turnaments = Turnament::latest()->get();
        return view('admin.goal.create', compact('players', 'teams', 'matchs', 'matchvenues', 'turnaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Goal::create($request->all());
        return redirect()->route("goal.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goal = Goal::findOrFail($id);
        return view('admin.goal.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goal=Goal::findOrFail($id);
        $players = Player::latest()->get();
        $teams = Team::latest()->get();
        $matchs = Match::latest()->get();
        $matchvenues = Matchvenue::latest()->get();
        $turnaments = Turnament::latest()->get();
        return view('admin.goal.edit',compact('goal', 'players', 'teams', 'matchs', 'matchvenues', 'turnaments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Goal::findOrFail($id)->update($request->all());
        return redirect()->route('goal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Goal::findOrFail($id)->delete();
        return redirect()->route("goal.index");
    }
}
