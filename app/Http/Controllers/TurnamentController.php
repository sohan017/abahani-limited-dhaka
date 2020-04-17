<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turnament;
use Illuminate\Support\Facades\Validator;

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

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'start_date' => 'required',
            'end_date' => 'required',
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
        Turnament::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            
        ]);
        return redirect()->route("admin.turnament.index")->withSuccess("Turnament create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Turnament::findOrFail($id)->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            
        ]);
        return redirect()->route("admin.turnament.index")->withSuccess("Turnament update success.");
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
        return redirect()->route("admin.turnament.index");
    }
}
