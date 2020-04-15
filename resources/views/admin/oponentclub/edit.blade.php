@extends('layouts.admin')

@section('title')Update Oponent Club  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Oponent Club 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Oponent Club</a></li>
		<li class="active">Update Oponent Club</li>
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
					<h3 class="box-title">Update Oponent Club Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.oponentclub.update', $oponentclub->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name">Oponent Club Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter  name" value="{{ $oponentclub->name }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="logo">Oponent Club Logo:</label>
							<input type="file" class="form-control" id="logo" name="logo" placeholder="Enter  logo" value="{{ $oponentclub->logo }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="country">Country Name:</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="{{ $oponentclub->country }}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="state">City Name:</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter  state" value="{{ $oponentclub->state }}">
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

