<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turnament;

class TurnamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnaments= Turnament::latest()->get();
         return view("admin.turnament.index", compact('turnaments')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.turnament.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turnament::create($request->all());
        return redirect()->route("turnament.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnament = Turnament::findOrFail($id);
        return view('admin.turnament.show', compact('turnament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turnament=Turnament::findOrFail($id);
         return view('admin.turnament.edit', compact('turnament'));
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
        Turnament::findOrFail($id)->update($request->all());
        return redirect()->route("turnament.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turnament::findOrFail($id)->delete();
        return redirect()->route("turnament.index");
    }
}
