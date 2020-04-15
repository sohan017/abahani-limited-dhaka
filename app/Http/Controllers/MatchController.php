<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Turnament;
use App\Matchvenue;
use App\Team;
use App\OponentClub;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $matchs= Match::latest()->get();
         return view("admin.match.index", compact('matchs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turnaments = Turnament::latest()->get();
        $matchvenues = Matchvenue::latest()->get();
        $teams = Team::latest()->get();
        $oponentclubs = OponentClub::latest()->get();
        return view('admin.match.create', compact('turnaments', 'matchvenues','teams','oponentclubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Match::create($request->all());
        return redirect()->route("admin.match.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $match = Match::findOrFail($id);
        $turnaments = Turnament::latest()->get();
        $matchvenues = Matchvenue::latest()->get();
        $teams = Team::latest()->get();
        $oponentclubs = Team::latest()->get();
        return view('admin.match.show', compact('match', 'turnaments', 'matchvenues', 'teams', 'oponentclubs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match=Match::findOrFail($id);
        $turnaments = Turnament::latest()->get();
        $matchvenues = Matchvenue::latest()->get();
        $teams = Team::latest()->get();
        $oponentclubs = Oponentclub::latest()->get();
        return view('admin.match.edit',compact('match','turnaments', 'matchvenues', 'teams' , 'oponentclubs'));
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
        Match::findOrFail($id)->update($request->all());
        return redirect()->route('admin.match.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Match::findOrFail($id)->delete();
        return redirect()->route("admin.match.index");
    }
}
