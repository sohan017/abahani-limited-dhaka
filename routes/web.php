<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Auth::routes(['register' => false]);
Route::get('/login/bidder', 'Auth\LoginController@showBidderLoginForm');
Route::get('/login/coach', 'Auth\LoginController@showCoachLoginForm');
Route::get('/login/physio', 'Auth\LoginController@showPhysioLoginForm');
Route::get('/login/player', 'Auth\LoginController@showPlayerLoginForm');
Route::get('/login/subscriber', 'Auth\LoginController@showSubscriberLoginForm');
Route::get('/login/trainee', 'Auth\LoginController@showTraineeLoginForm');

Route::post('/login/bidder', 'Auth\LoginController@bidderLogin');
Route::post('/login/coach', 'Auth\LoginController@coachLogin');
Route::post('/login/physio', 'Auth\LoginController@physioLogin');
Route::post('/login/player', 'Auth\LoginController@playerLogin');
Route::post('/login/subscriber', 'Auth\LoginController@subscriberLogin');
Route::post('/login/trainee', 'Auth\LoginController@traineeLogin');

Route::get('/register/subscriber', 'Auth\RegisterController@showSubscriberRegisterForm')->name("register.subscriber");
Route::get('/register/trainee', 'Auth\RegisterController@showTraineeRegisterForm')->name("register.trainee");

Route::post('/register/subscriber', 'Auth\RegisterController@createSubscriber');
Route::post('/register/trainee', 'Auth\RegisterController@createTrainee');



Route::prefix('admin')->name('admin.')->group(function () {

	Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

	Route::resource("coach", "CoachController");
	Route::resource("playertype", "PlayertypeController");
	Route::resource("trainee", "TraineeController");
	Route::resource("physio", "PhysioController");
	Route::resource("player", "PlayerController");
	Route::resource("team", "TeamController");
	Route::resource("turnament", "TurnamentController");
	Route::resource("matchvenue", "MatchvenueController");
	Route::resource("match", "MatchController");
	Route::resource("goal", "GoalController");
	Route::resource("fitness", "FitnessController");
    
});

Route::namespace('Bidder')->prefix('bidder')->name('bidder.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});

Route::namespace('Coach')->prefix('coach')->name('coach.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});

Route::namespace('Physio')->prefix('physio')->name('physio.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});

Route::namespace('Player')->prefix('player')->name('player.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});

Route::namespace('Subscriber')->prefix('subscriber')->name('subscriber.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});

Route::namespace('Trainee')->prefix('trainee')->name('trainee.')->group(function () {
    Route::get('/', function () {
	    return view('welcome');
	})->name("dashboard");
});


