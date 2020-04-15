@extends('layouts.admin')

@section('title')Update bidder @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update bidder 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">bidder</a></li>
		<li class="active"> Update bidder </li>
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
					<h3 class="box-title">Update bidder</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.bidder.update',$bidder->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Update name" value="{{ $bidder->name }}">
						</div>

						<div class="form-group">
							<label for="club_name">Club Name:</label>
							<input type="text" class="form-control" id="club_name" name="club_name" placeholder="Update Club name" value="{{ $bidder->club_name }}">
						</div>
					
						<div class="form-group">
							<label for="contact_num"> Contact Number:</label>
							<input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Update bidder Contact Number" value="{{ $bidder->contact_num }}">
						</div>

						<div class="form-group">
							<label for="email"> Email:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Update bidder Email" value="{{ $bidder->email }}">
						</div>

						<div class="form-group">
							<label for="password"> Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Update bidder Password" value="{{ $bidder->password }}">
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

