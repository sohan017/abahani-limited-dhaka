@extends('layouts.admin')

@section('title') Player fitness Update @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Player fitness Update
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.playerfitness.index') }}">Player fitness</a></li>
		<li class="active">Player fitness Update</li>
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
					<h3 class="box-title">Player fitness Update</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.playerfitness.update', $playerfitness->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="player_id">Player name: *</label>
							<select name="player_id" id="player_id" class="form-control">
								
								@foreach($playeres as $player)
									<option @if($player->id == $playerfitness->player_id) selected @endif value="{{ $player->id }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="physio_id">Physio name: *</label>
							<select name="physio_id" id="physio_id" class="form-control">
								
								@foreach($physios as $physio)
									<option @if($physio->id == $playerfitness->physio_id) selected @endif value="{{ $physio->id }}">{{ $physio->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="is_feet"> IS feet: *</label>
							<input type="text" class="form-control" id="is_feet" name="is_feet" placeholder="Enter is_feet"  value="{{ $playerfitness->is_feet }}">
						</div>
					
						<div class="form-group">
							<label for="physio_note">Physio note: *</label>
							<textarea name="physio_note" id="physio_note" cols="30" rows="10" class="form-control" placeholder="Enter physio note">{{ $playerfitness->physio_note }}</textarea>
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

