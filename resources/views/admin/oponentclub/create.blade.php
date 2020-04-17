@extends('layouts.admin')

@section('title') Oponent Club Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Oponent Club Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.oponentclub.index') }}">Oponent Club</a></li>
		<li class="active">Oponent Club Create</li>
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
					<h3 class="box-title">Oponent Club Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.oponentclub.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Oponent Clube Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Match venue name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="logo">Oponent Clube Logo: *</label>
							<input type="file" class="form-control" id="logo" name="logo" placeholder="Enter club Logo">
						</div>

						<div class="form-group">
							<label for="country">Oponent Clube Country Name: *</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter Country name" value="{{old('country')}}">
						</div>
						

						<div class="form-group">
							<label for="state">Oponent Clube State: *</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter state name" value="{{old('state')}}">
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

