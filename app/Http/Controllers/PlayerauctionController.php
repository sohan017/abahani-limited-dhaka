<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerAuction;
use App\Auction;
use App\Player;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;





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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'auction_id' => 'required|max:20',
            'player_id' => 'required|max:20',
            'player_price' => 'required|max:35',
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

        PlayerAuction::create([
            'auction_id' => $request->auction_id,
            'player_id' => $request->player_id,
            'player_price' => $request->player_price,
            
        ]);
        return redirect()->route("admin.playerauction.index")->withSuccess("Player auction create success.");;
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
 
        PlayerAuction::findOrFail($id)->update([
            'auction_id' => $request->auction_id,
            'player_id' => $request->player_id,
            'player_price' => $request->player_price,
            
        ]);
        return redirect()->route('admin.playerauction.index')->withSuccess("Player auction Update success.");;;
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
