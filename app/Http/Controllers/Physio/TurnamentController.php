<?php

namespace App\Http\Controllers\Physio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Turnament;

class TurnamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnaments= Turnament::latest()->get();
        return view('common.turnament.index', compact('turnaments'));
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnament = Turnament::findOrFail($id);
        return view('common.turnament.turnament-profile', compact('turnament'));
    }

   
}
