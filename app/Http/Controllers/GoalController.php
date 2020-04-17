<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Player;
use App\Match;
use Illuminate\Support\Facades\Validator;



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
         $matchs = Match::latest()->get();
         
        return view('admin.goal.create', compact('players', 'matchs'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'goal_number' => 'required|max:2',
            'player_id' => 'required',
            'match_id' => 'required',
            'goal_time' => 'required',
            'goal_type' => 'required',
            'goal_team' => 'required',
            'goal_half' => 'required',
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

        Goal::create([
            'goal_number' => $request->goal_number,
            'player_id' => $request->player_id,
            'match_id' => $request->match_id,
            'goal_time' => $request->goal_time,
            'goal_type' => $request->goal_type,
            'goal_team' => $request->goal_team,
            'goal_half' => $request->goal_half,
        ]);
        return redirect()->route("admin.goal.index")->withSuccess("Goal create success.");
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
        $matchs = Match::latest()->get();
        return view('admin.goal.edit',compact('goal', 'players', 'matchs'));
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

        Goal::findOrFail($id)->update([
            'goal_number' => $request->goal_number,
            'player_id' => $request->player_id,
            'match_id' => $request->match_id,
            'goal_time' => $request->goal_time,
            'goal_type' => $request->goal_type,
            'goal_team' => $request->goal_team,
            'goal_half' => $request->goal_half,
        ]);
        return redirect()->route('admin.goal.index')->withSuccess("Goal update success.");
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
        return redirect()->route("admin.goal.index");
    }
}
