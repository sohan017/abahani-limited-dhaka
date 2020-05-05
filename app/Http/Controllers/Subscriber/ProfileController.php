<?php

namespace App\Http\Controllers\Subscriber;

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
        return view("subscriber.profile.index", compact('profile'));
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
            'contact_num' => 'required|max:20',
            'address' => 'required',
        ]);


        $subscriber = Auth::user();
        if ($request->has('img')) {
            $subscriber->img = $request->img->store('uploads/images/subscriberprofile');
        }
        $subscriber->name = $request->name;
        $subscriber->contact_num = $request->contact_num;
        $subscriber->address = $request->address;
        $subscriber->save();
         return redirect()->route('subscriber.profile')->withSuccess("Subscriber Profile Update success."); 
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

        $subscriber = Auth::user();
        $subscriber->password =  Hash::make($request->get('password'));
        $subscriber->save();
         return redirect()->route('subscriber.profile')->withSuccess("Subscriber Profile Update success.");
    }

  
}
