@extends('layouts.admin')

@section('title') Update Match  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Match 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Match</a></li>
		<li class="active">Update Match </li>
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
					<h3 class="box-title">Update Match</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.match.update',$match->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">

						<div class="form-group">
							<label for="name">Match Name :</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Match Date" value="{{ $match->name }}">
						</div>

						<div class="form-group">
							<label for="turnament_id">Turnament Name:</label>

							<select name="turnament_id" id="turnament_id" class="form-control">
								
								@foreach($turnaments as $turnament)
									<option @if($turnament->id == $match->turnament_id) selected @endif value="{{ $turnament->id }}">{{ $turnament->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="match_vanue_id">Vanue Name:</label>
							<select name="match_vanue_id" id="match_vanue_id" class="form-control">
								
								@foreach($matchvenues as $matchvenue)
									<option @if($matchvenue->id == $match->match_vanue_id) selected @endif value="{{ $matchvenue->id }}">{{ $matchvenue->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="team_id">Team Name:</label>
							<select name="team_id" id="team_id" class="form-control">
								
								@foreach($teams as $team)
									<option @if($team->id == $match->team_id) selected @endif value="{{ $team->id }}">{{ $team->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="oponent_club_id">oponent_club_id Name:</label>
							<select name="oponent_club_id" id="oponent_club_id" class="form-control">
								
								@foreach($oponentclubs as $oponentclub)
									<option @if($oponentclub->id == $match->oponent_club_id) selected @endif value="{{ $oponentclub->id }}">{{ $oponentclub->name }}</option>
								@endforeach
							</select>
						</div>

						
					
						<div class="form-group">
							<label for="home_away">Home or Away</label>
							<select class="form-control select2" name="home_away" value="{{ $match->home_away }}" style="width: 100%;">
								<option selected="selected" value="Home">Home</option>
								<option value="Away">Away</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="date">Match Date :</label>
							<input type="date" class="form-control" id="date" name="date" placeholder="Enter Match Date" value="{{ $match->date }}">
						</div>
					
						<div class="form-group">
							<label for="time">Match Time :</label>
							<input type="time" class="form-control" id="time" name="time" placeholder="Enter Match Time" value="{{ $match->time }}">
						</div>
					
						<div class="form-group">
							<label for="result">Match Result :</label>
							<input type="result" class="form-control" id="result" name="result" placeholder="Enter Match result" value="{{ $match->result }}">
						</div>
					
						<div class="form-group">
							<label for="decided_by">Match decided by :</label>
							<input type="decided_by" class="form-control" id="decided_by" name="decided_by" placeholder="Enter Match decided by" value="{{ $match->decided_by }}">
						</div>
					
						<div class="form-group">
							<label for="gd_point">Match GD point :</label>
							<input type="gd_point" class="form-control" id="gd_point" name="gd_point" placeholder="Enter Match GD point" value="{{ $match->gd_point }}">
						</div>
					
						<div class="form-group">
							<label for="pts">Match Point :</label>
							<input type="pts" class="form-control" id="pts" name="pts" placeholder="Enter Match  point" value="{{ $match->pts }}">
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

