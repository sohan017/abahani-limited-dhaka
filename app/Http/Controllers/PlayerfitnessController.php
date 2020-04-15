<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerFitness;
use App\Player;
use App\Physio;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PlayerFitness::create($request->all());
        return redirect()->route("admin.playerfitness.index");
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
         PlayerFitness::findOrFail($id)->update($request->all());
        return redirect()->route('admin.playerfitness.index');
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
