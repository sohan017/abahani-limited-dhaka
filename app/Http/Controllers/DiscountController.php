<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use App\Match;
use Illuminate\Support\Facades\Validator;

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

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'match_id' => 'required|max:20',
            'percent' => 'required|max:3',
           
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
        discount::create([
            'name' => $request->name,
            'match_id' => $request->match_id,
            'percent' => $request->percent,
        ]);
        return redirect()->route("admin.discount.index")->withSuccess("Discount create success.");
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
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        discount::findOrFail($id)->update([
            'name' => $request->name,
            'match_id' => $request->match_id,
            'percent' => $request->percent,
        ]);
        return redirect()->route('admin.discount.index')->withSuccess("Discount udate success.");
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


