<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use App\Match;

class DiscountController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts= discount::latest()->get();
         return view("admin.discount.index", compact('discounts')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matchs = Match::latest()->get();
        return view('admin.discount.create', compact('matchs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        discount::create($request->all());
        return redirect()->route("admin.discount.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $discount = discount::findOrFail($id);
        return view('admin.discount.show', compact('discount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount=discount::findOrFail($id);
        $matchs = Match::latest()->get();
        return view('admin.discount.edit',compact('discount', 'matchs'));
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
        discount::findOrFail($id)->update($request->all());
        return redirect()->route('admin.discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        discount::findOrFail($id)->delete();
        return redirect()->route("admin.discount.index");
    }
}


