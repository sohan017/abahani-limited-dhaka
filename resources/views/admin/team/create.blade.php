@extends('layouts.admin')

@section('title') Team Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Team Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Team</a></li>
		<li class="active">Team Create</li>
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
					<h3 class="box-title">Team Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.team.store') }}" method="post">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Team name">
						</div>

						<div class="form-group">
							<label for="logo">Logo upload:</label>
							<input type="file" class="form-control" id="logo" name="logo">

							<p class="help-block">Example block-level help text here.</p>
						</div>
					
						<div class="form-group">
							<label for="captain"> Team captain:</label>
							<input type="text" class="form-control" id="captain" name="captain" placeholder="Enter Team captain">
						</div>

						<div class="form-group">
							<label for="coach_id">Coach name:</label>

							<select name="coach_id" id="coach_id" class="form-control">
								
								@foreach($coaches as $coach)
									<option value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>

						
						<div class="form-group">
							<label for="physio_id">Physio name:</label>
							<select name="physio_id" id="physio_id" class="form-control">
								
								@foreach($physios as $physio)
									<option value="{{ $physio->id }}">{{ $physio->name }}</option>
								@endforeach
							</select>
						</div>

						<!-- <div class="form-group">
							<label for="win"> Team Win:</label>
							<input type="text" class="form-control" id="win" name="win" placeholder="Enter Team win">
						</div>
						
						<div class="form-group">
							<label for="loss"> Team Loss:</label>
							<input type="text" class="form-control" id="loss" name="loss" placeholder="Enter Team loss">
						</div>
						
						<div class="form-group">
							<label for="draw"> Team Draw:</label>
							<input type="text" class="form-control" id="draw" name="draw" placeholder="Enter Team draw">
						</div>
						
						<div class="form-group">
							<label for="match_played"> Team all match:</label>
							<input type="text" class="form-control" id="match_played" name="match_played" placeholder="Enter Team all match">
						</div>
						
						<div class="form-group">
							<label for="goal_for"> Team all goal for:</label>
							<input type="text" class="form-control" id="goal_for" name="goal_for" placeholder="Enter Team all goal for">
						</div> -->

						<!-- <div class="form-group">
							<label for="goal_against"> Team all goal against:</label>
							<input type="text" class="form-control" id="goal_against" name="goal_against" placeholder="Enter Team all goal against">
						</div>
 -->
						<!-- <div class="form-group">
							<label for="coach_name">Coach name:</label>

							<select name="coach_name" id="coach_name" class="form-control">
								
								@foreach($coaches as $coach)
									<option value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>

						
						<div class="form-group">
							<label for="physio_name">Physio name:</label>
							<select name="physio_name" id="physio_name" class="form-control">
								
								@foreach($physios as $physio)
									<option value="{{ $physio->id }}">{{ $physio->name }}</option>
								@endforeach
							</select>
						</div> -->
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

