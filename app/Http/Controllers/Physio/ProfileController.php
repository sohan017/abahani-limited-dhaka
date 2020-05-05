<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function edit()
    {
        
        $profile = Auth::user();
        return view("physio.profile.index", compact('profile'));
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
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'spacalize' => 'required|max:100',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            
        ]);


        $physio = Auth::user();
        $physio->name = $request->name;
        if ($request->has('img')) {
            $physio->img = $request->img->store('uploads/images/physioprofile');
        }
        $physio->spacalize = $request->spacalize;
        $physio->address = $request->address;
        $physio->city = $request->city;
        $physio->state = $request->state;
        $physio->country = $request->country;
        $physio->nationality = $request->nationality;
        $physio->save();
         return redirect()->route('physio.profile')->withSuccess("Physio Profile Update success."); 
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

        $physio = Auth::user();
        $physio->password =  Hash::make($request->get('password'));
        $physio->save();
         return redirect()->route('physio.profile')->withSuccess("Physio Profile Update success.");
    }
}
