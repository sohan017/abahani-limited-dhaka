@extends('layouts.admin')

@section('title') Turnament Update @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Turnament 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Turnament</a></li>
		<li class="active">Update Turnament</li>
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
					<h3 class="box-title">Update Turnament Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.turnament.update', $turnament->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name">Turnament Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Turnament name" value="{{ $turnament->name }}">
						</div>
						<div class="form-group">
							<label for="start_date"> Turnament start date:</label>
							<input type="date" class="form-control" id="start_date" name="start_date" placeholder="Enter Turnament start date" value="{{ $turnament->start_date }}">
						</div>
						<div class="form-group">
							<label for="end_date"> Turnament end date:</label>
							<input type="date" class="form-control" id="end_date" name="end_date" placeholder="Enter  end_date" value="{{ $turnament->end_date }}">
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

