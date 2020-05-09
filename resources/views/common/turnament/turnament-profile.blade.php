@extends('layouts.admin')
@section('title') Turnament Profile @endsection
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
		Turnament Profile
	</h1>
	<ol class="breadcrumb">
        <li><a href="{{route($route.'.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route($route.'.turnament')}}"><i class="fa fa-dashboard"></i> Turnament</a></li>
        <li class="active">Turnament Profile</li>
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
					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Turnament</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Turnament Name</b> <a class="pull-right">{{$turnament->name}}</a>
						</li>
						<li class="list-group-item">
							<b>Start Date</b> <a class="pull-right">{{$turnament->start_date}}</a>
						</li>
						<li class="list-group-item">
							<b>End date</b> <a class="pull-right">{{$turnament->end_date}}</a>
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

		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->

@endsection   

