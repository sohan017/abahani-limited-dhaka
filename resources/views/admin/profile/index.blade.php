
@extends('layouts.admin')
@section('title') Auction Create @endsection
@section('css') 

@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		User Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">User profile</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-3">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="{{ $userprofile->img ? $userprofile->img : asset('admin/dist/img/user4-128x128.jpg')}}" alt="User profile picture">


					<h3 class="profile-username text-center">{{ $userprofile->name }}</h3>

					<p class="text-muted text-center">Admin</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right">{{ $userprofile->name }}</a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right">{{ $userprofile->email }}</a>
						</li>
					</ul>

				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->

		</div>
		<!-- /.col -->
		<div class="col-md-9">
				@include("partial.notification")
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li><a href="#profile" data-toggle="tab">Edit Profile</a></li>
					<li><a href="#password" data-toggle="tab">Change Password</a></li>
				</ul>
				<div class="tab-content">

					<div class="active tab-pane" id="profile">
						<form class="form-horizontal" action="{{ route('admin.profile.update') }}" method="post" >
							@csrf
							<div class="form-group">
								<label for="img" class="col-sm-2 control-label">Change Picture:</label>

								<div class="col-sm-10">
									<input type="file" class="form-control" id="img"  name="img">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Update Name</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" placeholder="Name" value="{{ $userprofile->name }}" name="name">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-danger">Update</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="password">
						<form class="form-horizontal" action="{{ route('admin.profile.change.password') }}" method="post" >
							@csrf
							<div class="form-group">
								<label for="current-password" class="col-sm-2 control-label">Current Password: *</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="current-password" placeholder="Current Password" name="current-password">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-2 control-label">New Password: *</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="password" placeholder="New Password" name="password">
								</div>
							</div>
							<div class="form-group">
								<label for="password_confirmation" class="col-sm-2 control-label">Confirm Password: *</label>

								<div class="col-sm-10">
									<input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-danger">Update</button>
								</div>
							</div>
						</form>
					</div>
					<!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div>
			<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->

@endsection   

