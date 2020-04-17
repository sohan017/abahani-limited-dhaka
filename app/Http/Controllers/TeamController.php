<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Coach;
use App\Physio;
use Illuminate\Support\Facades\Validator;



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
         return view("admin.team.index", compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coaches = Coach::latest()->get();
        $physios = Physio::latest()->get();
        return view('admin.team.create', compact('coaches','physios'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'captain' => 'required',
            'coach_id' => 'required',
            'physio_id' => 'required',
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

        $uploadsLocation = "";
        if ($request->has('logo')) {
            $uploadsLocation = $request->logo->store('uploads/images/team');
        }

        Team::create([
            'name' => $request->name,
            'logo' => $uploadsLocation,
            'captain' => $request->captain,
            'coach_id' => $request->coach_id,
            'physio_id' => $request->physio_id,
            
        ]);
        return redirect()->route("admin.team.index")->withSuccess("Team create success.");
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
        return view('admin.team.show', compact('team', 'coaches', 'physios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $coaches = Coach::latest()->get(); 
        $physios = Physio::latest()->get();
        return view('admin.team.edit', compact('team', 'coaches', 'physios'));
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

        $team = Team::findOrFail($id);
        if ($request->has('logo')) {
            $team->logo = $request->logo->store('uploads/images/team');
        }
        $team->name = $request->name;
        $team->captain = $request->captain;
        $team->coach_id = $request->coach_id;
        $team->physio_id = $request->physio_id;
        $team->save();
        return redirect()->route('admin.team.index')->withSuccess("Team udate success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::findOrFail($id)->delete();
        return redirect()->route("admin.team.index");
    }
}
