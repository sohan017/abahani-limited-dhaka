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

Route::get('/clr', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Cleared!';
 });

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



Route::middleware("auth")->prefix('admin')->name('admin.')->group(function () {

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
	Route::resource("playerfitness", "PlayerfitnessController");
	Route::resource("traineefitness", "TraineefitnessController");
	Route::resource("oponentclub", "OponentclubController");
	Route::resource("ticket", "TicketController");
	Route::resource("subscriber", "SubscriberController");
	Route::resource("discount", "DiscountController");
	Route::resource("buyticket", "BuyticketController");
	Route::resource("auction", "AuctionController");
	Route::resource("bidder", "BidderController");
	Route::resource("playerauction", "PlayerauctionController");
	Route::resource("bid", "BidController");
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");
    
});

Route::middleware("auth:bidder")->namespace('Bidder')->prefix('bidder')->name('bidder.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::middleware("auth:coach")->namespace('Coach')->prefix('coach')->name('coach.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::middleware("auth:physio")->namespace('Physio')->prefix('physio')->name('physio.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::middleware("auth:player")->namespace('Player')->prefix('player')->name('player.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::middleware("auth:subscriber")->namespace('Subscriber')->prefix('subscriber')->name('subscriber.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::middleware("auth:trainee")->namespace('Trainee')->prefix('trainee')->name('trainee.')->group(function () {
	
	Route::get('/', 'DashboardController@index')->name('dashboard');
});


