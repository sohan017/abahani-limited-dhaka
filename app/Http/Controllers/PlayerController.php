<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Playertype;
use App\Team;
use App\Coach;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players= Player::latest()->get();
        return view("admin.player.index", compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        return view('admin.player.create', compact('playerTypes','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Player::create($request->all());
        return redirect()->route("admin.player.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        
        return view('admin.player.show', compact('player', 'playerTypes', 'teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player=Player::findOrFail($id);
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        
        return view('admin.player.edit',compact('player', 'playerTypes', 'teams'));
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
        Player::findOrFail($id)->update($request->all());
        return redirect()->route('admin.player.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::findOrFail($id)->delete();
        return redirect()->route("admin.player.index");
    }
}
