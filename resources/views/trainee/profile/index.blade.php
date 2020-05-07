@extends('layouts.admin')
@section('title') Trainee Profile @endsection
@section('css') 

@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Trainee Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">Trainee profile</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-3">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="{{ $profile->img ? asset($profile->img) : asset('admin/dist/img/user4-128x128.jpg')}}" alt="Trainee profile picture">


					<h3 class="profile-username text-center">{{ $profile->name }}</h3>

					<p class="text-muted text-center">Trainee</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right">{{ $profile->name }}</a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right">{{ $profile->email }}</a>
						</li>
						<li class="list-group-item">

							<b>Player Type</b> <a class="pull-right">{{ $profile->playerType->name }}</a>
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
					<li><a href="#password" data-toggle="tab">Change Password</a></li>
					<li><a href="#profile" data-toggle="tab">Edit Profile</a></li>
				</ul>
				<div class="tab-content">

					<div class=" tab-pane" id="profile">
						<form class="form-horizontal" action="{{ route('trainee.profile.update') }}" method="post" enctype="multipart/form-data" >
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
									<input type="text" class="form-control" id="name" placeholder="Name" value="{{ $profile->name }}" name="name">
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Player Type</label>

								<div class="col-sm-10">
									<select name="playertype_id" id="playertype_id" class="form-control">

										@foreach($playerTypes as $playerType)
										<option @if($playerType->id == $profile->playertype_id) selected @endif value="{{ $playerType->id }}">{{ $playerType->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Coach Name</label>

								<div class="col-sm-10">
									<select name="coach_id" id="coach_id" class="form-control">

										@foreach($coaches as $coach)
										<option @if($coach->id == $profile->coach_id) selected @endif value="{{ $coach->id }}">{{ $coach->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="dob" class="col-sm-2 control-label">Date of Birth</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{ $profile->dob }}">
								</div>
							</div>
							<div class="form-group">
								<label for="address" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-10">
									<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{ $profile->address }}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="city" class="col-sm-2 control-label">City</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{ $profile->city }}">
								</div>
							</div>
							<div class="form-group">
								<label for="state" class="col-sm-2 control-label">State</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{ $profile->state }}">
								</div>
							</div>
							<div class="form-group">
								<label for="country" class="col-sm-2 control-label">Country</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="{{ $profile->country }}">
								</div>
							</div>
							<div class="form-group">
								<label for="nationality" class="col-sm-2 control-label">Nationality</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter nationality" value="{{ $profile->nationality }}">
								</div>
							</div>
							<div class="form-group">
								<label for="hight" class="col-sm-2 control-label">Hight</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter hight" value="{{ $profile->hight }}">
								</div>
							</div>
							<div class="form-group">
								<label for="weight" class="col-sm-2 control-label">Weight</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{ $profile->weight }}">
								</div>
							</div>
							


							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</div>
						</form>
					</div>

					<div class="active tab-pane" id="password">
						<form class="form-horizontal" action="{{ route('trainee.profile.change.password') }}" method="post" >
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

