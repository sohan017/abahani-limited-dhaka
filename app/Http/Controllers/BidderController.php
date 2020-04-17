<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class BidderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidders= Bidder::latest()->get();
        return view("admin.bidder.index", compact('bidders')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bidder.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100|string',
            'club_name' => 'required|max:200|string',
            'contact_num' => 'required|max:20',
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

        Bidder::create([
            'name' => $request->name,
            'club_name' => $request->club_name,
            'contact_num' => $request->contact_num,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route("admin.bidder.index")->withSuccess("Bidder create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidder = Bidder::findOrFail($id);
        return view('admin.bidder.show', compact('bidder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidder=Bidder::findOrFail($id);
        return view('admin.bidder.edit',compact('bidder'));
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
        Bidder::findOrFail($id)->update([
            'name' => $request->name,
            'club_name' => $request->club_name,
            'contact_num' => $request->contact_num,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin.bidder.index')->withSuccess("Bidder update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bidder::findOrFail($id)->delete();
        return redirect()->route("admin.bidder.index");
    }
}

   
