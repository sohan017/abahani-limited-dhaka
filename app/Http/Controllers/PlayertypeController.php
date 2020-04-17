<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playertype;
use Illuminate\Support\Facades\Validator;

class PlayertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $playertypes= Playertype::latest()->get();
         return view("admin.playertype.index", compact('playertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.playertype.create');
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
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

        Playertype::create([
            'name' => $request->name,
        ]);
        return redirect()->route("admin.playertype.index")->withSuccess("Player type create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playertype = Playertype::findOrFail($id);
        
        return view('admin.playertype.show', compact('playertype'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playertype=Playertype::findOrFail($id);
         return view('admin.playertype.edit', compact('playertype'));
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

        Playertype::findOrFail($id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route("admin.playertype.index")->withSuccess("Player type udate success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Playertype::findOrFail($id)->delete();
        return redirect()->route("admin.playertype.index");
    }
}
