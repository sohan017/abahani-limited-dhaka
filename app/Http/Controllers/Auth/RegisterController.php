<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Subscriber;
use App\Trainee;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:subscriber');
        $this->middleware('guest:trainee');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function showSubscriberRegisterForm()
    {
        return view('auth.register', ['url' => 'subscriber']);
    }

    protected function createSubscriber(Request $request)
    {

        $this->redirectTo = "/register/subscriber";
        $request->validate([
            'contact_num' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:subscribers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $subscriber = Subscriber::create([
            'contact_num' => $request['contact_num'],
            'address' => $request['address'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
        // $subscriber->sendEmailVerificationNotification();

        return redirect()->intended('login/subscriber');
    }

    public function showTraineeRegisterForm()
    {
        return view('auth.register', ['url' => 'trainee']);
    }

    protected function createTrainee(Request $request)
    {
        $this->redirectTo = "/register/trainee";
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'contact_num' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:trainees'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        Trainee::create([
            'contact_num' => $request['contact_num'],
            'name' => $request['name'],
            'dob' => $request['dob'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'country' => $request['country'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/trainee');
    }
}
