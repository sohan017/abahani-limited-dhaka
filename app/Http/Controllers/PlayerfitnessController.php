<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerFitness;
use App\Player;
use App\Physio;
use Illuminate\Support\Facades\Validator;

class PlayerfitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerfitnesses= PlayerFitness::latest()->get();
        return view("admin.playerfitness.index", compact('playerfitnesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playeres = Player::latest()->get();
        $physios = Physio::latest()->get();
        return view('admin.playerfitness.create', compact('playeres','physios'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'player_id' => 'required',
            'physio_id' => 'required',
            'physio_note' => 'required',
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

        PlayerFitness::create([
            'player_id' => $request->player_id,
            'physio_id' => $request->physio_id,
            'is_feet' => $request->is_feet ? true : false,
            'physio_note' => $request->physio_note,
            
        ]);
        return redirect()->route("admin.playerfitness.index")->withSuccess("Player Feetness create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playerfitness = PlayerFitness::findOrFail($id);
        $player = Player::latest()->get();
        $physio = Physio::latest()->get();
        
        return view('admin.playerfitness.show', compact('playerfitness', 'player', 'physio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playerfitness= PlayerFitness::findOrFail($id);
        $playeres = Player::latest()->get();
        $physios = Physio::latest()->get();
        
        return view('admin.playerfitness.edit',compact('playerfitness', 'playeres', 'physios'));
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

        PlayerFitness::findOrFail($id)->update([
            'player_id' => $request->player_id,
            'physio_id' => $request->physio_id,
            'is_feet' => $request->is_feet ? true : false,
            'physio_note' => $request->physio_note,
            
        ]);
        return redirect()->route('admin.playerfitness.index')->withSuccess("Player Feetness update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlayerFitness::findOrFail($id)->delete();
        return redirect()->route("admin.playerfitness.index");
    }
}
