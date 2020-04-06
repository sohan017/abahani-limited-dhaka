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
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Match</a></li>
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
				<!-- form start -->
				<form role="form" action="{{ route('match.store') }}" method="post">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="turnament_name">Turnament Name:</label>

							<select name="turnament_name" id="turnament_name" class="form-control">
								
								@foreach($turnaments as $turnament)
									<option value="{{ $turnament->id }}">{{ $turnament->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="vanue_name">Vanue Name:</label>
							<select name="vanue_name" id="vanue_name" class="form-control">
								
								@foreach($matchvenues as $matchvenue)
									<option value="{{ $matchvenue->id }}">{{ $matchvenue->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="home_away">Home or Away</label>
							<select class="form-control select2" name="home_away" style="width: 100%;">
								<option selected="selected" value="Home">Home</option>
								<option value="Away">Away</option>
							</select>
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="date">Match Date :</label>
							<input type="date" class="form-control" id="date" name="date" placeholder="Enter Match Date">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="time">Match Time :</label>
							<input type="time" class="form-control" id="time" name="time" placeholder="Enter Match Time">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="result">Match Result :</label>
							<input type="result" class="form-control" id="result" name="result" placeholder="Enter Match result">
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="decided_by">Match decided by :</label>
							<input type="decided_by" class="form-control" id="decided_by" name="decided_by" placeholder="Enter Match decided by">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="gd_point">Match GD point :</label>
							<input type="gd_point" class="form-control" id="gd_point" name="gd_point" placeholder="Enter Match GD point">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="match_point">Match Point :</label>
							<input type="match_point" class="form-control" id="match_point" name="match_point" placeholder="Enter Match  point">
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

