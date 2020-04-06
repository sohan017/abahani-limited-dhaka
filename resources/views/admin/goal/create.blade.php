@extends('layouts.admin')

@section('title') Goal Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Goal Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Goal</a></li>
		<li class="active">Goal Create</li>
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
					<h3 class="box-title">Goal Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('goal.store') }}" method="post">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="goal_number">Goal Number:</label>
							<input type="text" class="form-control" id="goal_number" name="goal_number" placeholder="Enter goal number">
						</div>
					</div><div class="box-body">
						<div class="form-group">
							<label for="player_name">Player Name:</label>

							<select name="player_name" id="player_name" class="form-control">
								
								@foreach($players as $player)
									<option value="{{ $player->name }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="team_name">Team Name:</label>
							<select name="team_name" id="team_name" class="form-control">
								
								@foreach($teams as $team)
									<option value="{{ $team->name }}">{{ $team->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="match_name">Match Name:</label>
							<select name="match_name" id="match_name" class="form-control">
								
								<option value="Home">Home</option>
								<option value="Away">Away</option>
							
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="venue_name">Venue Name:</label>
							<select name="venue_name" id="venue_name" class="form-control">
								
								@foreach($matchvenues as $matchvenue)
									<option value="{{ $matchvenue->name }}">{{ $matchvenue->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="turnament_name">Turnament Name:</label>
							<select name="turnament_name" id="turnament_name" class="form-control">
								
								@foreach($turnaments as $turnament)
									<option value="{{ $turnament->name }}">{{ $turnament->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="goal_time">Goal time:</label>
							<input type="text" class="form-control" id="goal_time" name="goal_time" placeholder="Enter  time">
						</div>
					</div>
					

					<div class="box-body">
						<div class="form-group">
							<label for="goal_type">Goal Type:</label>
							<select class="form-control select2" name="goal_type" style="width: 100%;">
								<option selected="selected" value="Normal">Normal</option>
								<option value="Penalty">Penalty</option>
								<option value="On_Goal">On Goal</option>
							</select>
						</div>
					</div>

					
					<div class="box-body">
						<div class="form-group">
							<label for="goal_half">Goal half:</label>
							<input type="goal_half" class="form-control" id="goal_half" name="goal_half" placeholder="Enter goal half">
						</div>
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

