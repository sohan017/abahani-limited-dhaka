<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matchvenue;
use Illuminate\Support\Facades\Validator;
class MatchvenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchvenues= Matchvenue::latest()->get();
         return view("admin.matchvenue.index", compact('matchvenues')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matchvenue.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100|string',
            'city' => 'required|string',
            'country' => 'required|string',
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
        Matchvenue::create([
            'name' => $request->name,
            'city' => $request->city,
            'country' => $request->country,
        ]);
        return redirect()->route("admin.matchvenue.index")->withSuccess("Match venue create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matchvenue = Matchvenue::findOrFail($id);
        return view('admin.matchvenue.show', compact('matchvenue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matchvenue=Matchvenue::findOrFail($id);
         return view('admin.matchvenue.edit', compact('matchvenue'));
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

        Matchvenue::findOrFail($id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'country' => $request->country,
        ]);
        return redirect()->route("admin.matchvenue.index")->withSuccess("Match venue Update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matchvenue::findOrFail($id)->delete();
        return redirect()->route("admin.matchvenue.index");
    }
}
