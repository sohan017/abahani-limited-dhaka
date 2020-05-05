<?php

namespace App\Http\Controllers\Player;

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
        return view('player.player.index', compact('players'));
    }

  

   
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        $goals = Goal::latest()->get();
        $turnaments = Turnament::latest()->get();
        return view('player.player.player-profile', compact('player', 'playerTypes', 'teams', 'goals', 'turnaments'));
    }

   
}
