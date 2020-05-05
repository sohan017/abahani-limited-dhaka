<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Playertype;
use App\Team;
use App\Coach;

class ProfileController extends Controller
{
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profile = Auth::user();
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        return view("player.profile.index", compact('profile','playerTypes','teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $validatedData = $request->validate([
           'name' => 'required|max:100',
            'dob' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jersy_no' => 'required|max:4',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'hight' => 'required|max:9',
            'weight' => 'required|max:9',
            'team_id' => 'required|max:30',
            'playertype_id' => 'required|max:30',
        ]);


        $player = Auth::user();
        $player->name = $request->name;
        $player->dob = $request->dob;
        if ($request->has('img')) {
            $player->img = $request->img->store('uploads/images/playerprofile');
        }
        $player->jersy_no = $request->jersy_no;
        $player->address = $request->address;
        $player->city = $request->city;
        $player->state = $request->state;
        $player->country = $request->country;
        $player->nationality = $request->nationality;
        $player->hight = $request->hight;
        $player->weight = $request->weight;
        $player->team_id = $request->team_id;
        $player->playertype_id = $request->playertype_id;
        $player->save();
         return redirect()->route('player.profile')->withSuccess("Player Profile Update success."); 
    }

     public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current-password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        $player = Auth::user();
        $player->password =  Hash::make($request->get('password'));
        $player->save();
         return redirect()->route('player.profile')->withSuccess("Player Profile Update success.");
    }
}
