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
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.team.index') }}">Team</a></li>
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
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.team.update',$team->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="box-body">
						required = *
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $team->name }}">
						</div>

						<div class="form-group">
							<label for="logo"> Logo: *</label>
							<input type="file" class="form-control" id="logo" name="logo" placeholder="Enter Logo">
						</div>
						

						<div class="form-group">
							<label for="captain"> Team captain: *</label>
							<input type="text" class="form-control" id="captain" name="captain" placeholder="Enter Team captain" value="{{ $team->captain }}">
						</div>


						<div class="form-group">
							<label for="coach_id">Coach name: *</label>
							<select name="coach_id" id="coach_id" class="form-control">
								
								@foreach($coaches as $coach)
									<option @if($coach->id == $team->coach_id) selected @endif value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="physio_id">Physio name: *</label>
							<select name="physio_id" id="physio_id" class="form-control">
								
								@foreach($physios as $physio)
									<option @if($physio->id == $team->physio_id) selected @endif value="{{ $physio->id }}">{{ $physio->name }}</option>
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

