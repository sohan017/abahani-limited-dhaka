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
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.subscriber.index') }}">Subscriber</a></li>
		<li class="active">Subscriber Create</li>
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
					<h3 class="box-title">Subscriber Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.subscriber.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Enter Full Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Full name"value="{{old('name')}}">
						</div>
					
						<div class="form-group">
							<label for="contact_num">Contact Number: *</label>
							<input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Enter Contact Number"value="{{old('contact_num')}}">
						</div>
					
					    <div class="form-group">
							<label for="address"> Address: *</label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{old('address')}}</textarea>
						</div>

						<div class="form-group">
							<label for="email">Email address: *</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter email"value="{{old('email')}}">
						</div>
						<div class="form-group">
							<label for="password">Password: *</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password">
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

