<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerAuction;
use App\Auction;
use App\Player;


class PlayerauctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerauctions= PlayerAuction::latest()->get();
        return view("admin.playerauction.index", compact('playerauctions')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $auctions=Auction::latest()->get();
        $players = Player::latest()->get();
        return view('admin.playerauction.create', compact('auctions', 'players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PlayerAuction::create($request->all());
        return redirect()->route("admin.playerauction.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playerauction = PlayerAuction::findOrFail($id);
        return view('admin.playerauction.show', compact('playerauction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playerauction=PlayerAuction::findOrFail($id);
        $auctions = Auction::latest()->get();
        $players = Player::latest()->get();
        return view('admin.playerauction.edit',compact('playerauction', 'auctions', 'players'));
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
        PlayerAuction::findOrFail($id)->update($request->all());
        return redirect()->route('admin.playerauction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlayerAuction::findOrFail($id)->delete();
        return redirect()->route("admin.playerauction.index");
    }
}
