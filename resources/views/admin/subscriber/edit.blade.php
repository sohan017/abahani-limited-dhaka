@extends('layouts.admin')

@section('title')Update subscriber @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update subscriber 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">subscriber</a></li>
		<li class="active"> Update subscriber </li>
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
					<h3 class="box-title">Update subscriber</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.subscriber.update',$subscriber->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ $subscriber->name }}">
						</div>
					
						<div class="form-group">
							<label for="contact_num"> Contact Number:</label>
							<input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Enter Contact Number" value="{{ $subscriber->contact_num }}">
						</div>
					
						<div class="form-group">
							<label for="address"> Address: </label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{ $subscriber->address }}</textarea>
						</div>
					
						<div class="form-group">
							<label for="email"> Email:</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter category email" value="{{ $subscriber->email }}">
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
