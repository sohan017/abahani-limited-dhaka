@extends('layouts.admin')

@section('title')Update Match venue  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Match venue 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Match venue</a></li>
		<li class="active">Update Match venue</li>
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
					<h3 class="box-title">Update Match venue Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('matchvenue.update', $matchvenue->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name">Natch Venue Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter  name" value="{{ $matchvenue->name }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="city">City Name:</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter  city" value="{{ $matchvenue->city }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="country">Country Name:</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="{{ $matchvenue->country }}">
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

