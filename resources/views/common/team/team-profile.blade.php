@extends('layouts.admin')
@section('title') Team Profile @endsection
@section('css') 
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	.flip-card {
		background-color: transparent;
		width: 300px;
		height: 300px;
		perspective: 1000px;
	}

	.flip-card-inner {
		position: relative;
		width: 100%;
		height: 100%;
		text-align: center;
		transition: transform 0.6s;
		transform-style: preserve-3d;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}

	.flip-card:hover .flip-card-inner {
		transform: rotateY(180deg);
	}

	.flip-card-front, .flip-card-back {
		position: absolute;
		width: 100%;
		height: 100%;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	.flip-card-front {
		background-color: #bbb;
		color: black;
	}

	.flip-card-back {
		background-color: #2980b9;
		color: white;
		transform: rotateY(180deg);
	}
</style>
@endsection


@section('content')

@if(Auth::guard('coach')->check())
@php 
    $route = "coach";
@endphp
@elseif(Auth::guard('physio')->check())
@php 
    $route = "physio";
@endphp
@elseif(Auth::guard('player')->check())
@php 
    $route = "player";
@endphp
@elseif(Auth::guard('trainee')->check())
@php 
    $route = "trainee";
@endphp
@endif
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Team Profile
	</h1>
    <ol class="breadcrumb">
        <li><a href="{{route($route . '.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route($route . '.team')}}"><i class="fa fa-dashboard"></i> Team</a></li>
        <li class="active">Team Profile</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-5">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="{{ asset($team->logo) }}" alt="Team Name profile picture">

					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Club Team</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Team Name</b> <a class="pull-right">{{ $team->name }}</a>
						</li>
						<li class="list-group-item">
							<b>Team Captain</b> <a class="pull-right">{{ $team->captain }}</a>
						</li>
						<li class="list-group-item">
							<b>Team coach</b> <a class="pull-right">{{ $team->coach ? $team->coach->name : "" }}</a>
						</li>
						<li class="list-group-item">
							<b>Team physio</b> <a class="pull-right">{{ $team->physio ? $team->physio->name : "" }}</a>
						</li>
						
						<li class="list-group-item">
							<b>Game Played</b> <a class="pull-right">{{ count($team->matchs) }} Matches</a>
						</li>
						<li class="list-group-item">
							<b>Win</b> <a class="pull-right">{{ $team->getMatchsResult()["win"] }}</a>
						</li>
						<li class="list-group-item">
							<b>Drow</b> <a class="pull-right">{{ $team->getMatchsResult()["drow"] }}</a>
						</li>
						<li class="list-group-item">
							<b>Lost</b> <a class="pull-right">{{ $team->getMatchsResult()["lost"] }}</a>
						</li>
						<li class="list-group-item">
							<b> Goals For</b> <a class="pull-right">{{ $team->getMatchsResult()["gf"] }}</a>
						</li>
						<li class="list-group-item">
							<b> Goals Against</b> <a class="pull-right">{{ $team->getMatchsResult()["ga"] }}</a>
						</li>						
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->

		</div>
		<!-- /.col -->
		<div class="col-md-3">
			@include("partial.notification")
			<div class="nav-tabs-custom">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="{{ asset($team->logo) }}" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<h1>{{ $team->name }}</h1> 
							<p>Captain:{{ $team->captain }}</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /.nav-tabs-custom -->

		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->

@endsection   