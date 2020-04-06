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
});

Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('admin.dashboard');

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
