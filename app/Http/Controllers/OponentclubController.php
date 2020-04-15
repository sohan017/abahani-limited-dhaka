<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OponentClub;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OponentClub::create($request->all());
        return redirect()->route("admin.oponentclub.index");
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
        OponentClub::findOrFail($id)->update($request->all());
        return redirect()->route("admin.oponentclub.index");
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
