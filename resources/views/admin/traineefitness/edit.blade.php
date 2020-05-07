@extends('layouts.admin')

@section('title') Trainee fitness Update @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Trainee fitness Update
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.trainee.index') }}">Trainee fitness</a></li>
		<li class="active">Trainee fitness Update</li>
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
					<h3 class="box-title">Trainee fitness Update</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.traineefitness.update', $traineefitness->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="trainee_id">Trainee name: *</label>
							<select name="trainee_id" id="trainee_id" class="form-control">
								
								@foreach($trainees as $trainee)
									<option @if($trainee->id == $traineefitness->trainee_id) selected @endif value="{{ $trainee->id }}">{{ $trainee->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="physio_id">Physio name: *</label>
							<select name="physio_id" id="physio_id" class="form-control">
								
								@foreach($physios as $physio)
									<option @if($physio->id == $traineefitness->physio_id) selected @endif value="{{ $physio->id }}">{{ $physio->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="is_feet"> 
								<input type="checkbox" name="is_feet" id="" value="1">
								Is this trainee feet ? 
							</label>
							
						</div>
					
						<div class="form-group">
							<label for="physio_note"> Physio note: *</label>
							<textarea name="physio_note" id="physio_note" cols="30" rows="10" class="form-control" placeholder="Enter physio note">{{ $traineefitness->physio_note }}</textarea>
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

