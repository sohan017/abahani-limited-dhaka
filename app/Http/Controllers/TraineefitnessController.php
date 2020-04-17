<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TraineeFitness;
use App\Trainee;
use App\Physio;
use Illuminate\Support\Facades\Validator;

class TraineefitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traineefitnesses= TraineeFitness::latest()->get();
        return view("admin.traineefitness.index", compact('traineefitnesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainees = Trainee::latest()->get();
        $physios = Physio::latest()->get();
        return view('admin.traineefitness.create', compact('trainees','physios'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'trainee_id' => 'required',
            'physio_id' => 'required',
            'physio_note' => 'required',
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

        TraineeFitness::create([
            'trainee_id' => $request->trainee_id,
            'physio_id' => $request->physio_id,
            'is_feet' => $request->is_feet ? true : false,
            'physio_note' => $request->physio_note,
            
        ]);
        return redirect()->route("admin.traineefitness.index")->withSuccess("Trainee Feetness create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traineefitness = TraineeFitness::findOrFail($id);
        $trainee = Trainee::latest()->get();
        $physio = Physio::latest()->get();
        
        return view('admin.traineefitness.show', compact('traineefitness', 'trainee', 'physio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $traineefitness= TraineeFitness::findOrFail($id);
        $trainees = Trainee::latest()->get();
        $physios = Physio::latest()->get();
        
        return view('admin.traineefitness.edit',compact('traineefitness', 'trainees', 'physios'));
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
         TraineeFitness::findOrFail($id)->update([
            'trainee_id' => $request->trainee_id,
            'physio_id' => $request->physio_id,
            'is_feet' => $request->is_feet ? true : false,
            'physio_note' => $request->physio_note,
            
        ]);
        return redirect()->route('admin.traineefitness.index')->withSuccess("Trainee Feetness update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TraineeFitness::findOrFail($id)->delete();
        return redirect()->route("admin.traineefitness.index");
    }
}
