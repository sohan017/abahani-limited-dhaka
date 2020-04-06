<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physio;

class PhysioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $physios= Physio::latest()->get();
        return view("admin.physio.index", compact('physios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.physio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Physio::create($request->all());
        return redirect()->route("physio.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $physio = Physio::findOrFail($id);
        return view('admin.physio.show', compact('physio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $physio=Physio::findOrFail($id);
        return view('admin.physio.edit',compact('physio'));
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
        Physio::findOrFail($id)->update($request->all());
        return redirect()->route('physio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Physio::findOrFail($id)->delete();
        return redirect()->route("physio.index");
    }
}
