<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyTicket;
use App\Ticket;
use App\Subscriber;
use App\Discount;
use Illuminate\Support\Facades\Validator;

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ticket_id' => 'required|max:11',
            'subscriber_id' => 'required|max:11',
            'vip_qty' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/',
            'normal_qty' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/',
            'classic_qty' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/',
            'vip_price' => 'required|min:1|regex:/^\d+(\.\d{1,2})?$/',
            'normal_price' => 'required|min:3',
            'classic_price' => 'required|min:3|regex:/^\d+(\.\d{1,2})?$/',
            'sub_total_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'discount_id' => 'required',
            'total_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
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
        BuyTicket::create([
            'ticket_id' => $request->ticket_id,
            'subscriber_id' => $request->subscriber_id,
            'vip_qty' => $request->vip_qty,
            'normal_qty' => $request->normal_qty,
            'classic_qty' => $request->classic_qty,
            'vip_price' => $request->vip_price,
            'normal_price' => $request->classic_price,
            'classic_price' => $request->classic_price,
            'sub_total_price' => $request->sub_total_price,
            'discount_id' => $request->discount_id,
            'total_price' => $request->total_price,
        ]);
        return redirect()->route("admin.buyticket.index")->withSuccess("Buy Ticket create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        BuyTicket::findOrFail($id)->update([
            'ticket_id' => $request->ticket_id,
            'subscriber_id' => $request->subscriber_id,
            'vip_qty' => $request->vip_qty,
            'normal_qty' => $request->normal_qty,
            'classic_qty' => $request->classic_qty,
            'vip_price' => $request->vip_price,
            'normal_price' => $request->classic_price,
            'classic_price' => $request->classic_price,
            'sub_total_price' => $request->sub_total_price,
            'discount_id' => $request->discount_id,
            'total_price' => $request->total_price,
        ]);
        return redirect()->route('admin.buyticket.index')->withSuccess("Buy Ticket update success.");
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