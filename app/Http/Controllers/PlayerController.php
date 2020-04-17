<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Playertype;
use App\Team;
use App\Coach;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players= Player::latest()->get();
        return view("admin.player.index", compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        return view('admin.player.create', compact('playerTypes','teams'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'dob' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jersy_no' => 'required|max:4',
            'address' => 'required',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'country' => 'required|max:100',
            'nationality' => 'required|max:100',
            'gender' => 'required|max:30',
            'hight' => 'required|max:9',
            'weight' => 'required|max:9',
            'religion' => 'required|max:10',
            'national_id_number' => 'required|max:30',
            'birth_certificet_number' => 'required|max:30',
            'team_id' => 'required|max:30',
            'playertype_id' => 'required|max:30',
            'email' => 'required|email|unique:App\Bidder,email',
            'password' => 'required|min:6',
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


        if ($request->has('img')) {
            $uploadsLocation = $request->img->store('uploads/images/trainee');
        }

        Player::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'img' => $uploadsLocation,
            'jersy_no' => $request->jersy_no,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'hight' => $request->hight,
            'weight' => $request->weight,
            'religion' => $request->religion,
            'national_id_number' => $request->national_id_number,
            'birth_certificet_number' => $request->birth_certificet_number,
            'team_id' => $request->team_id,
            'playertype_id' => $request->playertype_id,
            'email' => $request->email,
            'password' => $request->password,
            
        ]);
        return redirect()->route("admin.player.index")->withSuccess("Player create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        
        return view('admin.player.show', compact('player', 'playerTypes', 'teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player=Player::findOrFail($id);
        $playerTypes = Playertype::latest()->get();
        $teams = Team::latest()->get();
        
        return view('admin.player.edit',compact('player', 'playerTypes', 'teams'));
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

        $player = Player::findOrFail($id);
        $player->name = $request->name;
        $player->dob = $request->dob;
        if ($request->has('img')) {
            $player->img = $request->img->store('uploads/images/player');
        }
        $player->jersy_no = $request->jersy_no;
        $player->address = $request->address;
        $player->city = $request->city;
        $player->state = $request->state;
        $player->country = $request->country;
        $player->nationality = $request->nationality;
        $player->gender = $request->gender;
        $player->hight = $request->hight;
        $player->weight = $request->weight;
        $player->religion = $request->religion;
        $player->national_id_number = $request->national_id_number;
        $player->birth_certificet_number = $request->birth_certificet_number;
        $player->team_id = $request->team_id;
        $player->playertype_id = $request->playertype_id;
        $player->email = $request->email;
        $player->password = $request->password;
        $player->save();

        return redirect()->route('admin.player.index')->withSuccess("Player Update success.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Player::findOrFail($id)->delete();
        return redirect()->route("admin.player.index");
    }
}
