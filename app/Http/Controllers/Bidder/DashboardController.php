<?php

namespace App\Http\Controllers\Bidder;

use App\Auction;
use App\Bid;
use App\Http\Controllers\Controller;
use App\PlayerAuction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dbAuctions = Auction::latest()->get();
        $auctions = collect();
        foreach($dbAuctions as $auction){
            if((strtotime($auction->start_time) <= time()) && (strtotime($auction->end_time) >= time())){
                $auctions->add($auction);
            }
        }
        return view('bidder.auctionplayer.index', compact("auctions"));  
    }

    public function playerAuction($id)
    {
        $pa = PlayerAuction::findOrFail($id);
        return view('bidder.bid.index', compact('pa'));
    }

    public function playerBid(Request $request, $id)
    {
        $pa = PlayerAuction::findOrFail($id);
        $bid_price = (float) $request->bid_price;
        if($bid_price  == null){
            return redirect()->back()->withError("Place your bid.");
        } elseif($bid_price  <= $pa->player_price){
            return redirect()->back()->withError("You can't pay lower/same price as asked.");
        } elseif($bid_price <= $pa->bids->first()->price){
            return redirect()->back()->withError("Someone already ready to pay that price.");
        }

        Bid::create([
            "player_auction_id" => $id,
            "bidder_id" => Auth::id(),
            "price" => $bid_price
        ]);
        return redirect()->back()->withSuccess("Your bid successfully added.");
    }

    public function myPlayer()
    {
        $dbAuctions = Auction::latest()->get();
        $players = collect();
        foreach($dbAuctions as $auction){
            if(strtotime($auction->end_time) < time()){
                foreach($auction->playerActions as $pa){
                    if($pa->player->playerAuctions->first()->bids->count()){
                        $players->add($pa->player);
                    }
                }
            }
        }
        return view('bidder.myplayer.index', compact("players"));  
          
    }

    public function soldPlayer()
    {
        $dbAuctions = Auction::latest()->get();
        $players = collect();
        foreach($dbAuctions as $auction){
            if(strtotime($auction->end_time) < time()){
                foreach($auction->playerActions as $pa){
                    if($pa->player->playerAuctions->first()->bids->count()){
                        $players->add($pa->player);
                    }
                }
            }
        }
        return view('bidder.soldplayer.index', compact("players"));  
    }
}
