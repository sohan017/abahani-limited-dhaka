@extends('layouts.admin')

@section('title') Match venue Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Match venue Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.matchvenue.index') }}">Match venue</a></li>
		<li class="active">Match venue Create</li>
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
					<h3 class="box-title">Match venue Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.matchvenue.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Match venue Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Match venue name"  value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="city">City Name: *</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter city name"  value="{{old('city')}}">
						</div>

						<div class="form-group">
							<label for="country">Country Name: *</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country name"  value="{{old('country')}}">
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

