@extends('layouts.admin')

@section('title') Trainee fitness Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Trainee fitness Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.trainee.index') }}">Trainee fitness</a></li>
		<li class="active">Trainee fitness Create</li>
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
					<h3 class="box-title">Trainee fitness Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.traineefitness.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="trainee_id">Trainee name: *</label>
							<select name="trainee_id" id="trainee_id" class="form-control"value="{{old('trainee_id')}}">
								<option value="0">No Trainee</option>
								@foreach($trainees as $trainee)
									<option value="{{ $trainee->id }}">{{ $trainee->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="physio_id">Physio name: *</label>
							<select name="physio_id" id="physio_id" class="form-control"value="{{old('physio_id')}}">
								<option value="0">No Physio</option>
								@foreach($physios as $physio)
									<option value="{{ $physio->id }}">{{ $physio->name }}</option>
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
							<label for="physio_note"> Physio note: * </label>
							<textarea name="physio_note" id="physio_note" cols="30" rows="10" class="form-control" placeholder="Enter physio note">{{old('physio_note')}}</textarea>
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

