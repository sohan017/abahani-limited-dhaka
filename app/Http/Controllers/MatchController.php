<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Turnament;
use App\Matchvenue;
use App\Team;
use App\OponentClub;
use Illuminate\Support\Facades\Validator;


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

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100|string',
            'match_number' => 'required',
            'turnament_id' => 'required',
            'match_vanue_id' => 'required',
            'team_id' => 'required',
            'oponent_club_id' => 'required',
            'home_away' => 'required',
            'date' => 'required',
            'time' => 'required',
            'result' => 'required',
            'decided_by' => 'required',
            'gd_point' => 'required',
            'pts' => 'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Match::create([
            'name' => $request->name,
            'match_number' => $request->match_number,
            'turnament_id' => $request->turnament_id,
            'match_vanue_id' => $request->match_vanue_id,
            'team_id' => $request->team_id,
            'oponent_club_id' => $request->oponent_club_id,
            'home_away' => $request->home_away,
            'date' => $request->date,
            'time' => $request->time,
            'result' => $request->result,
            'decided_by' => $request->decided_by,
            'gd_point' => $request->gd_point,
            'pts' => $request->pts,
        ]);
        return redirect()->route("admin.match.index")->withSuccess("Match create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        Match::findOrFail($id)->update([
            'name' => $request->name,
            'match_number' => $request->match_number,
            'turnament_id' => $request->turnament_id,
            'match_vanue_id' => $request->match_vanue_id,
            'team_id' => $request->team_id,
            'oponent_club_id' => $request->oponent_club_id,
            'home_away' => $request->home_away,
            'date' => $request->date,
            'time' => $request->time,
            'result' => $request->result,
            'decided_by' => $request->decided_by,
            'gd_point' => $request->gd_point,
            'pts' => $request->pts,
        ]);
        return redirect()->route('admin.match.index')->withSuccess("Match Update success.");;
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
