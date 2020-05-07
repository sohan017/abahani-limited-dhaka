@extends('layouts.admin')

@section('title') Turnament Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Turnament Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.turnament.index') }}">Turnament</a></li>
		<li class="active">Turnament Create</li>
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
					<h3 class="box-title">Turnament Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.turnament.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Turnament Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Turnament name" value="{{old('name')}}">
						</div>
						<div class="form-group">
							<label for="start_date">Turnament start date: *</label>
							<input type="date" class="form-control" id="start_date" name="start_date" placeholder="Enter Turnament start date" value="{{old('start_date')}}">
						</div>
						<div class="form-group">
							<label for="end_date">Turnament end date: *</label>
							<input type="date" class="form-control" id="end_date" name="end_date" placeholder="Enter Turnament end date" value="{{old('end_date')}}">
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

