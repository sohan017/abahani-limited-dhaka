<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers= Subscriber::latest()->get();
        return view("admin.subscriber.index", compact('subscribers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscriber.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact_num' => 'required|max:20',
            'address' => 'required',
            'email' => 'required|email|unique:App\Subscriber,email',
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

        $uploadsLocation ="";
        if ($request->has('img')) {
            $uploadsLocation = $request->img->store('uploads/images/subscriber');
        }
        // dd($uploadsLocation);

        Subscriber::create([
            'name' => $request->name,
            'img' => $uploadsLocation,
            'contact_num' => $request->contact_num,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route("admin.subscriber.index")->withSuccess("Subscriber create success.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        return view('admin.subscriber.show', compact('subscriber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriber=Subscriber::findOrFail($id);
        return view('admin.subscriber.edit',compact('subscriber'));
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
        // $validator = $this->validator($request->all());
        // if ($validator->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validator);
        // }
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact_num' => 'required|max:20',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        $subscriber = Subscriber::findOrFail($id);
        $subscriber->name = $request->name;
        if ($request->has('img')) {
        $subscriber->img = $request->img->store('uploads/images/subscriber');
         }
        $subscriber->contact_num = $request->contact_num;
        $subscriber->address = $request->address;
        $subscriber->email = $request->email;
        $subscriber->password =  Hash::make($request->get('password'));
        $subscriber->save();
        return redirect()->route('admin.subscriber.index')->withSuccess("Subscriber update success.");
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscriber::findOrFail($id)->delete();
        return redirect()->route("admin.subscriber.index");
    }
}
