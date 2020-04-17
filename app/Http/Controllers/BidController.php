<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use App\PlayerAuction;
use App\Bidder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'player_auction_id' => 'required|max:100',
            'bidder_id' => 'required|max:200',
            'price' => 'required|max:35',
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

        Bid::create([
            'player_auction_id' => $request->player_auction_id,
            'bidder_id' => $request->bidder_id,
            'price' => $request->price,
            'date_time'=>Carbon::now(),
            
        ]);
        return redirect()->route("admin.bid.index")->withSuccess("Bid create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Bid::findOrFail($id)->update([
            'player_auction_id' => $request->player_auction_id,
            'bidder_id' => $request->bidder_id,
            'price' => $request->price,
            'date_time'=>Carbon::now(),
            
        ]);
        return redirect()->route('admin.bid.index')->withSuccess("Bid Update success.");;
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

