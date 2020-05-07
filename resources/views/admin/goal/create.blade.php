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
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.goal.index') }}">Goal</a></li>
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
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.goal.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="goal_number">Goal Number: *</label>
							<input type="text" class="form-control" id="goal_number" name="goal_number" placeholder="Enter goal number" value="{{old('goal_number')}}">
						</div>
					
						<div class="form-group">
							<label for="player_id">Player Name: *</label>
							<select name="player_id" id="player_id" class="form-control" value="{{old('player_id')}}">
								
								@foreach($players as $player)
									<option value="{{ $player->id }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control" value="{{old('match_id')}}">
								
								@foreach($matchs as $match)
									<option value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="goal_time">Goal time: *</label>
							<input type="text" class="form-control" id="goal_time" name="goal_time" placeholder="Enter  time" value="{{old('goal_time')}}">
						</div>
				
						<div class="form-group">
							<label for="goal_type">Goal Type: *</label>
							<select class="form-control select2" name="goal_type" style="width: 100%;" value="{{old('goal_type')}}">
								<option selected="selected" value="Normal">Normal</option>
								<option value="Penalty">Penalty</option>
								<option value="On_Goal">On Goal</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="goal_team">Team goal: *</label>
							<input type="text" class="form-control" id="goal_team" name="goal_team" placeholder="Enter Team goal" value="{{old('goal_team')}}">
						</div>
					
						<div class="form-group">
							<label for="goal_half">Goal half: *</label>
							<select name="goal_half" id="goal_half" class="form-control" value="{{old('goal_half')}}">
								<option value="first">First Half</option>
								<option value="second">Second Half</option>
							</select>
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

