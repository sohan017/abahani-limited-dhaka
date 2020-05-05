<?php

namespace App\Http\Controllers\Trainee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Playertype;
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
        $coaches = Coach::latest()->get();
        return view("trainee.profile.index", compact('profile','playerTypes','coaches'));
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
            'playertype_id' => 'required',
            'coach_id' => 'required',
            'dob' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'hight' => 'required|max:9',
            'weight' => 'required|max:9',
        ]);



        $trainee = Auth::user();
        if ($request->has('img')) {
            $trainee->img = $request->img->store('uploads/images/traineeprofile');
        }
        $trainee->name = $request->name;
        $trainee->playertype_id = $request->playertype_id;
        $trainee->coach_id = $request->coach_id;
        $trainee->dob = $request->dob;
        $trainee->address = $request->address;
        $trainee->city = $request->city;
        $trainee->state = $request->state;
        $trainee->country = $request->country;
        $trainee->nationality = $request->nationality;
        $trainee->hight = $request->hight;
        $trainee->weight = $request->weight;
        $trainee->save();
         return redirect()->route('trainee.profile')->withSuccess("Trainee Profile Update success."); 
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

        $trainee = Auth::user();
        $trainee->password =  Hash::make($request->get('password'));
        $trainee->save();
         return redirect()->route('trainee.profile')->withSuccess("Trainee Profile Update success.");
    }
}

