<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Match;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets= Ticket::latest()->get();
         return view("admin.ticket.index", compact('tickets')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matchs = Match::latest()->get();
        return view('admin.ticket.create', compact('matchs'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'match_id' => 'required|max:11',
            'vip_qty' => 'required|max:10',
            'normal_qty' => 'required|max:10',
            'classic_qty' => 'required|max:10',
            'vip_price' => 'required|max:5',
            'normal_price' => 'required|max:3',
            'classic_price' => 'required|max:4',
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

        Ticket::create([
            'match_id' => $request->match_id,
            'vip_qty' => $request->vip_qty,
            'normal_qty' => $request->normal_qty,
            'classic_qty' => $request->classic_qty,
            'vip_price' => $request->vip_price,
            'normal_price' => $request->normal_price,
            'classic_price' => $request->classic_price,
            
        ]);
        return redirect()->route("admin.ticket.index")->withSuccess("Ticket create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('admin.ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket=Ticket::findOrFail($id);
        $matchs = Match::latest()->get();
        return view('admin.ticket.edit',compact('ticket', 'matchs'));
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
        Ticket::findOrFail($id)->update([
            'match_id' => $request->match_id,
            'vip_qty' => $request->vip_qty,
            'normal_qty' => $request->normal_qty,
            'classic_qty' => $request->classic_qty,
            'vip_price' => $request->vip_price,
            'normal_price' => $request->normal_price,
            'classic_price' => $request->classic_price,
            
        ]);
        return redirect()->route('admin.ticket.index')->withSuccess("Ticket Update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::findOrFail($id)->delete();
        return redirect()->route("admin.ticket.index");
    }

    public function ticketdetail($id)
    {
        $ticket = Ticket::where('match_id',$id)->first();
        return view('website.website.ticketdetail',compact('ticket'));
    }


}

