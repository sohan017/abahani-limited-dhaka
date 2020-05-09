<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Player;
use App\Playertype;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function index()
    {
        $coach = Auth::user();
        $players = $coach->team ? $coach->team->players : null;
        return view('common.player.index', compact('players'));
    }

    public function show($id)
    {
        $coach = Auth::user();
        $players = $coach->team ? $coach->team->players->find($id) : null;

        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        return view('common.player.show', compact('player', 'playerTypes', 'teams'));
    }
}
