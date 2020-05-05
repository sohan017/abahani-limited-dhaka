<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  
    public function edit()
    {
        $profile = Auth::user();
        return view("coach.profile.index", compact('profile'));
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
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'hight' => 'required|max:9',
        ]);


        $coach = Auth::user();
        $coach->name = $request->name;
        if ($request->has('img')) {
            $coach->img = $request->img->store('uploads/images/coachprofile');
        }
        $coach->dob = $request->dob;
        $coach->address = $request->address;
        $coach->city = $request->city;
        $coach->state = $request->state;
        $coach->country = $request->country;
        $coach->nationality = $request->nationality;
        $coach->hight = $request->hight;
        $coach->save();
         return redirect()->route('coach.profile')->withSuccess("Coach Profile Update success."); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current-password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        $coach = Auth::user();
        $coach->password =  Hash::make($request->get('password'));
        $coach->save();
         return redirect()->route('coach.profile')->withSuccess("Coach Profile Update success.");
    }
}
