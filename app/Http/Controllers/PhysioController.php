<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Physio;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'spacalize' => 'required|max:100',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'gender' => 'required|max:100',
            'religion' => 'required|max:100',
            'national_id_number' => 'required|max:30',
            'email' => 'required|email|unique:App\Bidder,email',
            'password' => 'required|min:6',
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
            $uploadsLocation = $request->img->store('uploads/images/physio');
        }

        Physio::create([
            'name' => $request->name,
            'img' => $uploadsLocation,
            'spacalize' => $request->spacalize,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'national_id_number' => $request->national_id_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),            
        ]);
        return redirect()->route("admin.physio.index")->withSuccess("Physio create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $physio = Physio::findOrFail($id);
        if ($request->has('img')) {
            $physio->img = $request->img->store('uploads/images/physio');
        }
        $physio->name = $request->name;
        $physio->spacalize = $request->spacalize;
        $physio->address = $request->address;
        $physio->city = $request->city;
        $physio->state = $request->state;
        $physio->country = $request->country;
        $physio->nationality = $request->nationality;
        $physio->gender = $request->gender;
        $physio->religion = $request->religion;
        $physio->national_id_number = $request->national_id_number;
        $physio->email = $request->email;
        $physio->password =  Hash::make($request->get('password'));
        $physio->save();
        return redirect()->route('admin.physio.index')->withSuccess("Physio update success.");
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
        return redirect()->route("admin.physio.index");
    }
}
