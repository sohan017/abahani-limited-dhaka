<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyTicket;
use App\Ticket;
use App\Subscriber;
use App\Discount;

class BuyticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buytickets= BuyTicket::latest()->get();
         return view("admin.buyticket.index", compact('buytickets')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         $tickets = Ticket::latest()->get();
         $subscribers = Subscriber::latest()->get();
         $discounts = Discount::latest()->get();
         
        return view('admin.buyticket.create', compact('tickets', 'subscribers', 'discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BuyTicket::create($request->all());
        return redirect()->route("admin.buyticket.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buyticket = BuyTicket::findOrFail($id);
        return view('admin.buyticket.show', compact('buyticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buyticket=BuyTicket::findOrFail($id);
        $tickets = Ticket::latest()->get();
        $subscribers = Subscriber::latest()->get();
        $discounts = Discount::latest()->get();
        return view('admin.buyticket.edit',compact('buyticket', 'tickets', 'subscribers', 'discounts'));
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
        BuyTicket::findOrFail($id)->update($request->all());
        return redirect()->route('admin.buyticket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BuyTicket::findOrFail($id)->delete();
        return redirect()->route("admin.buyticket.index");
    }
}