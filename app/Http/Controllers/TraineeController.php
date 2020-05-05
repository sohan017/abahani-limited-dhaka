<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainee;
use App\Coach;
use App\Playertype;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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
         return view('admin.trainee.create', compact('playerTypes','coaches'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'con_num' => 'required|max:20',
            'playertype_id' => 'required',
            'coach_id' => 'required',
            'dob' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'gender' => 'required|max:30',
            'hight' => 'required|max:9',
            'weight' => 'required|max:9',
            'religion' => 'required|max:10',
            'national_id_number' => 'required|max:30',
            'birth_certificet_number' => 'required|max:30',
            'email' => 'required|email|unique:App\Bidder,email',
            'password' => 'required|min:6',
            // 'is_verified' => 'required',
            // 'is_played' => 'required|max:11',
            'ap_fee' => 'max:11',
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

         $uploadsLocation ="";
        if ($request->has('img')) {
            $uploadsLocation = $request->img->store('uploads/images/trainee');
        }

        Trainee::create([
            'name' => $request->name,
            'con_num' => $request->con_num,
            'playertype_id' => $request->playertype_id,
            'coach_id' => $request->coach_id,
            'dob' => $request->dob,
            'img' => $uploadsLocation,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'hight' => $request->hight,
            'weight' => $request->weight,
            'religion' => $request->religion,
            'national_id_number' => $request->national_id_number,
            'birth_certificet_number' => $request->birth_certificet_number,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'is_verified' => $request->is_verified ? true : false,
            'is_played' => $request->is_played ? true : false,
            'ap_fee' => $request->ap_fee,
            
        ]);
        return redirect()->route("admin.trainee.index")->withSuccess("Trainee create success.");
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
        $playerTypes = Playertype::latest()->get();
        $coaches = Coach::latest()->get();
        return view('admin.trainee.show', compact('trainee', 'playerTypes', 'coaches'));
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
        $playerTypes = Playertype::latest()->get();
        $coaches = Coach::latest()->get();
        return view('admin.trainee.edit',compact('trainee','playerTypes','coaches'));
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

        $trainee = Trainee::findOrFail($id);
        $trainee->name = $request->name;
        $trainee->con_num = $request->con_num;
        $trainee->playertype_id = $request->playertype_id;
        $trainee->coach_id = $request->coach_id;
        $trainee->dob = $request->dob;
        if ($request->has('img')) {
            $trainee->img = $request->img->store('uploads/images/trainee');
        }
        $trainee->address = $request->address;
        $trainee->city = $request->city;
        $trainee->state = $request->state;
        $trainee->country = $request->country;
        $trainee->nationality = $request->nationality;
        $trainee->gender = $request->gender;
        $trainee->hight = $request->hight;
        $trainee->weight = $request->weight;
        $trainee->religion = $request->religion;
        $trainee->national_id_number = $request->national_id_number;
        $trainee->email = $request->email;
        $trainee->password =  Hash::make($request->get('password'));
        $trainee->is_verified = $request->is_verified ? true : false;
        $trainee->is_played = $request->is_played ? true : false;
        $trainee->ap_fee = $request->ap_fee;
        $trainee->save();
        return redirect()->route('admin.trainee.index')->withSuccess("Trainee Update success.");
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
        return redirect()->route("admin.trainee.index");
    }
}
