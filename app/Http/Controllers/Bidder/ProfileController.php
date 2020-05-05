<?php

namespace App\Http\Controllers\Bidder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        return view("bidder.profile.index", compact('profile'));
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
            'name' => 'required|max:100|string',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'club_name' => 'required|max:200|string',
            'contact_num' => 'required|max:20',
        ]);


        $bidder = Auth::user();
        if ($request->has('img')) {
            $bidder->img = $request->img->store('uploads/images/bidderprofile');
        }
        $bidder->name = $request->name;
        $bidder->club_name = $request->club_name;
        $bidder->contact_num = $request->contact_num;
        $bidder->save();
         return redirect()->route('bidder.profile')->withSuccess("Bidder Profile Update success.");
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

        $bidder = Auth::user();
        $bidder->password =  Hash::make($request->get('password'));
        $bidder->save();
         return redirect()->route('bidder.profile')->withSuccess("Bidder Profile Update success.");
    }

   
}
