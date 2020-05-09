<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Player;
use App\Playertype;
use App\Team;
use App\Goal;
use App\Turnament;

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
        return view('common.player.index', compact('players'));
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
        return view('common.player.show', compact('player', 'playerTypes', 'teams'));
    }


   
}
