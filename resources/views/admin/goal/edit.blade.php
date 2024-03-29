@extends('layouts.admin')

@section('title')  Update Goal  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Goal 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.goal.index') }}">Goal</a></li>
		<li class="active">Update Goal</li>
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
					<h3 class="box-title">Update Goal</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.goal.update',$goal->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="goal_number">Goal Number: *</label>
							<input type="text" class="form-control" id="goal_number" name="goal_number" placeholder="Enter goal number" value="{{ $goal->goal_number }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="player_id">Player Name: *</label>
							<select name="player_id" id="player_id" class="form-control">
								
								@foreach($players as $player)
									<option @if($player->id == $goal->player_id) selected @endif value="{{ $player->id }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control">
								
								@foreach($matchs as $match)
									<option @if($match->id == $goal->match_id) selected @endif value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="goal_time">Goal time: *</label>
							<input type="text" class="form-control" id="goal_time" name="goal_time" placeholder="Enter  time" value="{{ $goal->goal_time }}">
						</div>
					</div>
					

					<div class="box-body">
						<div class="form-group">
							<label for="goal_type">Goal Type: *</label>
							<select class="form-control select2" name="goal_type" value="{{ $goal->goal_type }}" style="width: 100%;">
								<option selected="selected" value="Normal">Normal</option>
								<option value="Penalty">Penalty</option>
								<option value="On_Goal">On Goal</option>
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="goal_team">Goal Time: *</label>
							<input type="text" class="form-control" id="goal_team" name="goal_team" placeholder="Enter team Goal" value="{{ $goal->goal_team }}">
						</div>
					</div>

					
					<div class="box-body">
						<div class="form-group">
							<label for="goal_half">Goal half: *</label>
							<input type="goal_half" class="form-control" id="goal_half" name="goal_half" placeholder="Enter goal half" value="{{ $goal->goal_half }}">
						</div>
					</div>

					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Update</button>
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

