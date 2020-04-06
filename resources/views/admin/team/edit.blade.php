@extends('layouts.admin')

@section('title')Update Team @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Team 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Team</a></li>
		<li class="active"> Update Team </li>
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
					<h3 class="box-title">Update Team</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('team.update',$team->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $team->name }}">
						</div>

						<div class="form-group">
							<label for="captain"> Team captain:</label>
							<input type="text" class="form-control" id="captain" name="captain" placeholder="Enter Team captain" value="{{ $team->captain }}">
						</div>

						<div class="form-group">
							<label for="win"> Team Win:</label>
							<input type="text" class="form-control" id="win" name="win" placeholder="Enter Team win " value="{{ $team->win }}">
						</div>
						
						<div class="form-group">
							<label for="loss"> Team Loss:</label>
							<input type="text" class="form-control" id="loss" name="loss" placeholder="Enter Team loss" value="{{ $team->name }}">
						</div>
						
						<div class="form-group">
							<label for="draw"> Team Draw:</label>
							<input type="text" class="form-control" id="draw" name="draw" placeholder="Enter Team draw" value="{{ $team->loss }}">
						</div>
						
						<div class="form-group">
							<label for="match_played"> Team all match:</label>
							<input type="text" class="form-control" id="match_played" name="match_played" placeholder="Enter Team all match" value="{{ $team->match_played }}">
						</div>
						
						<div class="form-group">
							<label for="goal_for"> Team all goal for:</label>
							<input type="text" class="form-control" id="goal_for" name="goal_for" placeholder="Enter Team all goal for" value="{{ $team->goal_for }}">
						</div>

						<div class="form-group">
							<label for="goal_against"> Team all goal against:</label>
							<input type="text" class="form-control" id="goal_against" name="goal_against" placeholder="Enter Team all goal against" value="{{ $team->goal_against }}">
						</div>


						<div class="form-group">
							<label for="coach_name">Coach name:</label>
							<select name="coach_name" id="coach_name" class="form-control">
								
								@foreach($coaches as $coach)
									<option @if($coach->id == $team->coach_name) selected @endif value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="physio_name">Physio name:</label>
							<select name="physio_name" id="physio_name" class="form-control">
								
								@foreach($physios as $physio)
									<option @if($physio->id == $team->physio_name) selected @endif value="{{ $physio->id }}">{{ $physio->name }}</option>
								@endforeach
							</select>
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

