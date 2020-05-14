<?php

namespace App\Http\Controllers\Subscriber;

use App\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tickets = Auth::user()->buyTickets;
        return view('subscriber.buyticket.ticketorder', compact("tickets"));
    }

    public function discounts()
    {
        $dbDiscouonts = Discount::latest()->get();
        $discounts = collect();
        foreach($dbDiscouonts as $discount){
            if(strtotime($discount->match->date . $discount->match->time) <= time()){
                $discounts->add($discount);
            }
        }
        return view('subscriber.disounts', compact("discounts"));

    }
}
