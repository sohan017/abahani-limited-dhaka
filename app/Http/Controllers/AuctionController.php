<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions= Auction::latest()->get();
        return view("admin.auction.index", compact('auctions')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auction.create');
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'auction_detail' => 'required',
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

        Auction::create([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'auction_detail' => $request->auction_detail,
        ]);
        return redirect()->route("admin.auction.index")->withSuccess("Auction create success.");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auction = Auction::findOrFail($id);
        return view('admin.auction.show', compact('auction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auction=Auction::findOrFail($id);
        return view('admin.auction.edit',compact('auction'));
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
        Auction::findOrFail($id)->update([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'auction_detail' => $request->auction_detail,
        ]);
        return redirect()->route('admin.auction.index')->withSuccess("Auction update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auction::findOrFail($id)->delete();
        return redirect()->route("admin.auction.index");
    }
}

   