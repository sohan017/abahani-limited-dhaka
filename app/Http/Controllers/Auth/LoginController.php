<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:bidder')->except('logout');
        $this->middleware('guest:coach')->except('logout');
        $this->middleware('guest:physio')->except('logout');
        $this->middleware('guest:player')->except('logout');
        $this->middleware('guest:subscriber')->except('logout');
        $this->middleware('guest:trainee')->except('logout');
    }

    public function showBidderLoginForm()
    {
        return view('auth.login', ['url' => 'bidder']);
    }

    public function bidderLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('bidder')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/bidder');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showCoachLoginForm()
    {
        return view('auth.login', ['url' => 'coach']);
    }

    public function coachLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('coach')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/coach');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showPhysioLoginForm()
    {
        return view('auth.login', ['url' => 'physio']);
    }

    public function physioLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('physio')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/physio');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showPlayerLoginForm()
    {
        return view('auth.login', ['url' => 'player']);
    }

    public function playerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('player')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/player');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showSubscriberLoginForm()
    {
        return view('auth.login', ['url' => 'subscriber']);
    }

    public function subscriberLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('subscriber')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/subscriber');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showTraineeLoginForm()
    {
        return view('auth.login', ['url' => 'trainee']);
    }

    public function traineeLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('trainee')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/trainee');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
