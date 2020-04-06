<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainee;
use App\Playertype;
use App\Coach;
use App\Physio;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees= Trainee::latest()->get();
         return view("admin.trainee.index", compact('trainees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playerTypes = Playertype::latest()->get();
        $coaches = Coach::latest()->get();
        $physios = Physio::latest()->get();

         return view('admin.trainee.create', compact('playerTypes','coaches','physios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Trainee::create($request->all());
        return redirect()->route("trainee.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainee = Trainee::findOrFail($id);
        return view('admin.trainee.show', compact('trainee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainee=Trainee::findOrFail($id);
        return view('admin.trainee.edit',compact('trainee'));
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
        Trainee::findOrFail($id)->update($request->all());
        return redirect()->route('trainee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Trainee::findOrFail($id)->delete();
        return redirect()->route("trainee.index");
    }
}
