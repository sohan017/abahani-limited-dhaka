@extends('layouts.admin')

@section('title') Bidder Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Bidder Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashbaord</a></li>
		<li><a href="{{ route('admin.bidder.index') }}">Bidder</a></li>
		<li class="active">Bidder Create</li>
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
					<h3 class="box-title">Bidder Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.bidder.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="img">Image upload: *</label>
							<input type="file" class="form-control" id="img" name="img" >
						</div>

						<div class="form-group">
							<label for="club_name">Club Name: *</label>
							<input type="text" class="form-control" id="club_name" name="club_name" placeholder="Enter club name" value="{{old('club_name')}}">
						</div>

						<div class="form-group">
							<label for="contact_num">Contact Number: *</label>
							<input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Enter Contact Number" value="{{old('contact_num')}}">
						</div>

						<div class="form-group">
							<label for="email">Email: *</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
						</div>

						<div class="form-group">
							<label for="password">Password: *</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
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

