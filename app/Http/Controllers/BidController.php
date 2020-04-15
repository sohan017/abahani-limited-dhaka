<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use App\PlayerAuction;
use App\Bidder;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids= Bid::latest()->get();
        return view("admin.bid.index", compact('bids')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $playerauctions=PlayerAuction::latest()->get();
        $bidders = Bidder::latest()->get();
        return view('admin.bid.create', compact('playerauctions', 'bidders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bid::create($request->all());
        return redirect()->route("admin.bid.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bid = Bid::findOrFail($id);
        return view('admin.bid.show', compact('bid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bid=Bid::findOrFail($id);
        $playerauctions = PlayerAuction::latest()->get();
        $bidders = Bidder::latest()->get();
        return view('admin.bid.edit',compact('bid', 'playerauctions', 'bidders'));
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
        Bid::findOrFail($id)->update($request->all());
        return redirect()->route('admin.bid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bid::findOrFail($id)->delete();
        return redirect()->route("admin.bid.index");
    }
}

