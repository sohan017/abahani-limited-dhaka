@extends('layouts.admin')

@section('title') Subscriber Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Subscriber Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i> Dashbaord</a></li>
		<li><a href="">Subscriber</a></li>
		<li class="active">Subscriber Buy Ticket Create</li>
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
					<h3 class="box-title">Payment Information</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form"  method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="email">Email: *</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
						</div>
						<div class="form-group">
							<label for="address">Address: *</label>
							<input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{old('address')}}">
						</div>
						<div class="form-group">
							<label for="city">City: </label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{old('city')}}">
						</div>
						<div class="form-group">
							<label for="state">State: *</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{old('state')}}">
						</div>
						
						<div class="form-group">
							<label for="contact_num">Contact Number: *</label>
							<input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Enter contact number" value="{{old('contact_num')}}">
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

