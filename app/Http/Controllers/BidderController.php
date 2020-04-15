<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidder;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bidder::create($request->all());
        return redirect()->route("admin.bidder.index");
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
        Bidder::findOrFail($id)->update($request->all());
        return redirect()->route('admin.bidder.index');
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

   
