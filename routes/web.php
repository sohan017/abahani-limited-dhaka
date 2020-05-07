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
// Route::get('/', function () {
// 	    return view('website.layouts.index');
// 	})->name("website");

Route::get('welcome', function () {
	    return view('website.website.run');
	})->name("welcome");

Route::get('ticket', function () {
	    return view('website.website.ticket');
	})->name("ticket");




Route::get('ticketdetail', function () {
	    return view('website.website.ticketdetail');
	})->name("ticketdetail");

Route::get('payment', function () {
	    return view('website.website.payment');
	})->name("payment");





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

Auth::routes(['register' => false, 'verify' => true]);
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
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");

	Route::get('bid', function () {
	    return view('bidder.bid.index');
	})->name("bid");

	Route::get('auctionplayer', function () {
	    return view('bidder.auctionplayer.index');
	})->name("auctionplayer");

	Route::get('soldplayer', function () {
	    return view('bidder.soldplayer.index');
	})->name("soldplayer");

});

Route::middleware("auth:coach")->namespace('Coach')->prefix('coach')->name('coach.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");
	Route::get('coachtrainee', function () {
	    return view('coach.trainee.index');
	})->name("coachtrainee");

	Route::get('traineeprofile', function () {
	    return view('coach.trainee.trainee-profile');
	})->name("traineeprofile");


	Route::get('coachplayer', function () {
	    return view('coach.player.index');
	})->name("coachplayer");

	Route::get('playerprofile', function () {
	    return view('coach.player.player-profile');
	})->name("playerprofile");

	Route::get('team', function () {
	    return view('coach.team.index');
	})->name("team");

	Route::get('teamprofile', function () {
	    return view('coach.team.team-profile');
	})->name("teamprofile");


	Route::get('turnament', function () {
	    return view('coach.turnament.index');
	})->name("turnament");


	Route::get('turnamentprofile', function () {
	    return view('coach.turnament.turnament-profile');
	})->name("turnamentprofile");

	Route::get('player_physionote', function () {
	    return view('coach.player-fitness.index');
	})->name("physionote");

	Route::get('trainee_physionote', function () {
	    return view('coach.trainee-fitness.index');
	})->name("trainee_physionote");










});

Route::middleware("auth:physio")->namespace('Physio')->prefix('physio')->name('physio.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");


	Route::get('trainee', function () {
	    return view('physio.trainee.index');
	})->name("trainee");


	Route::get('traineeprofile', function () {
	    return view('physio.trainee.trainee-profile');
	})->name("traineeprofile");


	// Route::get('player', function () {
	//     return view('physio.player.index');
	// })->name("player");

	// Route::get('playerprofile', function () {
	//     return view('physio.player.player-profile');
	// })->name("playerprofile");

	Route::get('player', "PlayerController@index")->name("player");
	Route::get('playerprofile/{id}', "PlayerController@show")->name("playerprofile");

	Route::get('team', "TeamController@index")->name("team");
	Route::get('teamprofile/{id}', "TeamController@show")->name("teamprofile");

	// Route::get('team', function () {
	//     return view('physio.team.index');
	// })->name("team");

	// Route::get('teamprofile', function () {
	//     return view('physio.team.team-profile');
	// })->name("teamprofile");

	Route::get('turnament',"TurnamentController@index")->name("turnament");
	Route::get('turnamentprofile/{id}',"TurnamentController@show")->name("turnamentprofile");


	// Route::get('turnament', function () {
	//     return view('physio.turnament.index');
	// })->name("turnament");


	// Route::get('turnamentprofile', function () {
	//     return view('physio.player-fitness.index');
	// })->name("turnamentprofile");

	Route::get('playerfitness', 'PlayerfitnessController@index')->name("playerfitness");
	Route::get('playerfitnessnote/{id}', 'PlayerfitnessController@show')->name("playerfitnessnote");
	Route::post('playerfitnessnote/{id}', 'PlayerfitnessController@add_player_fitness')->name("playerfitnessnote.post");

	Route::get('teaineefitness', function () {
	    return view('physio.trainee-fitness.index');
	})->name("teaineefitness");

});

Route::middleware("auth:player")->namespace('Player')->prefix('player')->name('player.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");

	Route::get('physionote', function () {
	    return view('player.physionote.index');
	})->name("physionote"); 

	Route::get('trainee', "TraineeController@index")->name("trainee");
	// Route::get('traineeprofile', "TraineeController@show")->name("traineeprofile");


	Route::get('player', "PlayerController@index")->name("player");
	Route::get('playerprofile/{id}', "PlayerController@show")->name("playerprofile");


	Route::get('team', "TeamController@index")->name("team");
	Route::get('teamprofile/{id}', "TeamController@show")->name("teamprofile");

	

	Route::get('turnament',"TurnamentController@index")->name("turnament");
	Route::get('turnamentprofile/{id}',"TurnamentController@show")->name("turnamentprofile");


});

Route::middleware(["auth:subscriber"])->namespace('Subscriber')->prefix('subscriber')->name('subscriber.')->group(function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");
	// Route::get("buyticket",{return view('buyticket.ticketorder');})->name('buyticket');

	Route::get('buyticket', function () {
	    return view('subscriber.buyticket.ticketorder');
	})->name("buyticket");

	// Route::get('/', function () {return view('welcome');})->name("home");
});

Route::middleware("auth:trainee")->namespace('Trainee')->prefix('trainee')->name('trainee.')->group(function () {
	
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get("profile", "ProfileController@edit")->name('profile');
	Route::post("profile", "ProfileController@update")->name("profile.update");
	Route::post("profile/change-password", "ProfileController@changePassword")->name("profile.change.password");

	Route::get('physionote', function () {
	    return view('trainee.physionote.index');
	})->name("physionote"); 

	Route::get('trainee', function () {
	    return view('trainee.trainee.index');
	})->name("trainee");

	Route::get('traineeprofile', function () {
	    return view('trainee.trainee.trainee-profile');
	})->name("traineeprofile");


	Route::get('player', function () {
	    return view('trainee.player.index');
	})->name("player");

	Route::get('playerprofile', function () {
	    return view('trainee.player.player-profile');
	})->name("playerprofile");

	Route::get('team', function () {
	    return view('trainee.team.index');
	})->name("team");

	Route::get('teamprofile', function () {
	    return view('trainee.team.team-profile');
	})->name("teamprofile");


	Route::get('turnament', function () {
	    return view('trainee.turnament.index');
	})->name("turnament");


	Route::get('turnamentprofile', function () {
	    return view('player.turnament.turnament-profile');
	})->name("turnamentprofile");
});

// websire route

