<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PlayerFitness;
use App\Player;
use App\Physio;
use Auth;

class PlayerfitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = player::latest()->get();
        return view("physio.player-fitness.index", compact('players'));
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
        return view('physio.player-fitness.playerfitnessnote', compact('player'));
    }

    public function add_player_fitness(Request $request, $id)
    {
        PlayerFitness::create([
            "player_id" => $id,
            "physio_id" => Auth::id(),
            "physio_note" => $request->physio_note
        ]);

        return redirect()->back()->withSuccess("Helth note added success.");
    }
}
