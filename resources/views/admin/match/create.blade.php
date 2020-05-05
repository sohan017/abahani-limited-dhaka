@extends('layouts.admin')

@section('title') Match Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Match Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.match.index') }}">Match venue</a></li>
		<li class="active">Match Create</li>
	</ol>
</section>


<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Match Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.match.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Match Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Match name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="match_number">Match Number: *</label>
							<input type="text" class="form-control" id="match_number" name="match_number" placeholder="Enter Match match_number" value="{{old('match_number')}}">
						</div>

						<div class="form-group">
							<label for="turnament_id">Turnament Name: *</label>

							<select name="turnament_id" id="turnament_id" class="form-control" value="{{old('turnament_id')}}">
								
								@foreach($turnaments as $turnament)
									<option value="{{ $turnament->id }}">{{ $turnament->name }}</option>
								@endforeach
							</select>
						</div>
				
						<div class="form-group">
							<label for="match_vanue_id">Vanue Name: *</label>
							<select name="match_vanue_id" id="match_vanue_id" class="form-control" value="{{old('match_vanue_id')}}">
								
								@foreach($matchvenues as $matchvenue)
									<option value="{{ $matchvenue->id }}">{{ $matchvenue->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="team_id">Team Name: *</label>
							<select name="team_id" id="team_id" class="form-control" value="{{old('team_id')}}">
								
								@foreach($teams as $team)
									<option value="{{ $team->id }}">{{ $team->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="oponent_club_id">Oponent Team Name: *</label>
							<select name="oponent_club_id" id="oponent_club_id" class="form-control" value="{{old('oponent_club_id')}}">
								
								@foreach($oponentclubs as $oponentclub)
									<option value="{{ $oponentclub->id }}">{{ $oponentclub->name }}</option>
								@endforeach
							</select>
						</div>
						
					
						<div class="form-group">
							<label for="home_away">Home or Away: *</label>
							<select class="form-control select2" name="home_away" style="width: 100%;" value="{{old('home_away')}}">
								<option selected="selected" value="Home">Home</option>
								<option value="Away">Away</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="date">Match Date: *</label>
							<input type="date" class="form-control" id="date" name="date" placeholder="Enter Match Date" value="{{old('date')}}">
						</div>
					
						<div class="form-group">
							<label for="time">Match Time: *</label>
							<input type="time" class="form-control" id="time" name="time" placeholder="Enter Match Time" value="{{old('time')}}">
						</div>
					
						<div class="form-group">
							<label for="result">Match Result: *</label>
							<select class="form-control select2" name="result" style="width: 100%;" value="{{old('result')}}">
								<option selected="selected" value="Home" placeholder="none">none</option>
								<option  value="win">Win</option>
								<option value="drow">Drow</option>
								<option value="lost">Lost</option>
							</select>
							
							<!-- <input type="result" class="form-control" id="result" name="result" placeholder="Enter Match result" value="{{old('result')}}"> -->
						</div>
					
						<div class="form-group">
							<label for="decided_by">Match decided by: *</label>
							<input type="decided_by" class="form-control" id="decided_by" name="decided_by" placeholder="Enter Match decided by" value="{{old('decided_by')}}">
						</div>
					
						<div class="form-group">
							<label for="gf">Goals For: *</label>
							<input type="text" class="form-control" id="gf" name="gf" placeholder="Enter Goals For" value="{{old('gf')}}">
						</div>
						<div class="form-group">
							<label for="ga">Goals Against: *</label>
							<input type="text" class="form-control" id="ga" name="ga" placeholder="Enter Goals Against" value="{{old('ga')}}">
						</div>
						
					
						<div class="form-group">
							<label for="pts">Match Point: *</label>
							<input type="text" class="form-control" id="pts" name="pts" placeholder="Enter Match  point" value="{{old('pts')}}">
						</div>
					
					

					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.box-body -->
	</div>

</section>

<!-- /.content -->

@endsection

@section('js') 

@endsection

