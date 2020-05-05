<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches= Coach::latest()->get();
         return view("admin.coach.index", compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coach.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'dob' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'gender' => 'required|max:30',
            'hight' => 'required|max:9',
            'religion' => 'required|max:10',
            'national_id_number' => 'required|max:30',
            'email' => 'required|email|unique:App\Bidder,email',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }


        if ($request->has('img')) {
            $uploadsLocation = $request->img->store('uploads/images/coach');
        }
        Coach::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'img' => $uploadsLocation,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'hight' => $request->hight,
            'religion' => $request->religion,
            'national_id_number' => $request->national_id_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
        return redirect()->route("admin.coach.index")->withSuccess("Coach create success.");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coach = Coach::findOrFail($id);
        return view('admin.coach.show', compact('coach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach=Coach::findOrFail($id);
         return view('admin.coach.edit', compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $coach = Coach::findOrFail($id);
        $coach->name = $request->name;
        $coach->dob = $request->dob;
        if ($request->has('img')) {
            $coach->img = $request->img->store('uploads/images/coach');
        }
        $coach->address = $request->address;
        $coach->city = $request->city;
        $coach->state = $request->state;
        $coach->country = $request->country;
        $coach->nationality = $request->nationality;
        $coach->gender = $request->gender;
        $coach->hight = $request->hight;
        $coach->religion = $request->religion;
        $coach->national_id_number = $request->national_id_number;
        $coach->email = $request->email;
        $coach->password = Hash::make($request->password);
        $coach->save();
        return redirect()->route("admin.coach.index")->withSuccess("Coach Update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Coach::findOrFail($id)->delete();
        return redirect()->route("admin.coach.index");
    }
}
