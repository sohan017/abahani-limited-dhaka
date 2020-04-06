@extends('layouts.admin')

@section('title') Fitness Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Fitness Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Fitness</a></li>
		<li class="active">Fitness Create</li>
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
					<h3 class="box-title">Fitness Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('fitness.store') }}" method="post">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="fitness_name">Fitness problem name:</label>
							<input type="text" class="form-control" id="fitness_name" name="fitness_name" placeholder="Enter Fitness problem name">
						</div>
					</div>
					<div class="box-body">
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
							<label for="physio_name">Physio Name:</label>
							<select name="physio_name" id="physio_name" class="form-control">
								
								@foreach($physios as $physio)
								<option value="{{ $physio->name }}">{{ $physio->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="physio_not">physio note:</label>
							<textarea name="physio_not" id="physio_not" cols="30" rows="10" class="form-control" placeholder="Enter physio not"></textarea>
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

