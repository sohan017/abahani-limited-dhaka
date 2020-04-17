<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OponentClub;
use Illuminate\Support\Facades\Validator;

class OponentclubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oponentclubs= OponentClub::latest()->get();
         return view("admin.oponentclub.index", compact('oponentclubs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.oponentclub.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'required',
            'state' => 'required',
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
        $uploadsLocation = "";
        if ($request->has('logo')) {
            $uploadsLocation = $request->logo->store('uploads/images/team');
        }

        OponentClub::create([
            'name' => $request->name,
            'logo' => $uploadsLocation,
            'country' => $request->country,
            'state' => $request->state,
            
        ]);
        return redirect()->route("admin.oponentclub.index")->withSuccess("Oponent Club create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oponentclub = OponentClub::findOrFail($id);
        return view('admin.oponentclub.show', compact('oponentclub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oponentclub=OponentClub::findOrFail($id);
         return view('admin.oponentclub.edit', compact('oponentclub'));
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

        $oponentclub = OponentClub::findOrFail($id);
        $oponentclub->name = $request->name;
        if ($request->has('logo')) {
            $oponentclub->logo = $request->logo->store('uploads/images/oponentclub');
        }
        $oponentclub->country = $request->country;
        $oponentclub->state = $request->state;

        return redirect()->route("admin.oponentclub.index")->withSuccess("Oponent Club create success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OponentClub::findOrFail($id)->delete();
        return redirect()->route("admin.oponentclub.index");
    }
}
