@extends('layouts.admin')

@section('title') Trainee Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Trainee Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.trainee.index') }}">Trainee</a></li>
		<li class="active">Trainee Create</li>
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
					<h3 class="box-title">Trainee Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.trainee.store') }}" method="post"  enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Trainee name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="playertype_id">Playertype name: *</label>
							<select name="playertype_id" id="playertype_id" class="form-control" value="{{old('playertype_id')}}">
								
								@foreach($playerTypes as $playerType)
									<option value="{{ $playerType->id }}">{{ $playerType->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="coach_id">Coach name: *</label>
							<select name="coach_id" id="coach_id" class="form-control" value="{{old('coach_id')}}">
								
								@foreach($coaches as $coach)
									<option value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="dob"> Date of birth: *</label>
							<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{old('dob')}}">
						</div>
					
						<div class="form-group">
							<label for="img">Image upload: *</label>
							<input type="file" class="form-control" id="img" name="img"  value="{{old('img')}}">

							<p class="help-block">Example block-level help text here.</p>
						</div>
					
						<div class="form-group">
							<label for="address"> Address: *</label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter Trainee address"> {{old('address')}}</textarea>
						</div>
					
						<div class="form-group">
							<label for="city"> City: *</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter Trainee city" value="{{old('city')}}">
						</div>
					
						<div class="form-group">
							<label for="state">State: *</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter Trainee state"  value="{{old('state')}}">
						</div>
					
						<div class="form-group">
							<label for="country">Country: *</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter Trainee country"  value="{{old('country')}}">
						</div>
					
						<div class="form-group">
							<label for="nationality">Nationality: *</label>
							<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Trainee nationality"  value="{{old('nationality')}}">
						</div>
					
						<div class="form-group">
							<label>Gender: *</label>
							
							<select class="form-control select2" name="gender" style="width: 100%;"  value="{{old('gender')}}">
								<option selected="selected" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="hight">Hight: *</label>
							<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter Trainee hight" value="{{old('hight')}}">
						</div>
						<div class="form-group">
							<label for="weight">Weight: *</label>
							<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Trainee weight"  value="{{old('weight')}}">
						</div>
					
						<div class="form-group">
							<label for="religion">Religion: *</label>
							<select class="form-control select2" name="religion" style="width: 100%;"   value="{{old('religion')}}">
								<option selected="selected" value="Muslim">Muslim</option>
								<option value="Hindu">Hindu</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="national_id_number">National id number: *</label>
							<input type="text" class="form-control" id="national_id_number" name="national_id_number" placeholder="Enter Trainee national id number" value="{{old('national_id_number')}}">
						</div>
					
						<div class="form-group">
							<label for="birth_certificet_number">Birth certificet number: *</label>
							<input type="text" class="form-control" id="birth_certificet_number" name="birth_certificet_number" placeholder="Enter Trainee birth certificet number" value="{{old('birth_certificet_number')}}">
						</div>

					
						<div class="form-group">
							<label for="email">Email address: *</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter Trainee email" value="{{old('email')}}">
						</div>
						<div class="form-group">
							<label for="password">Password: *</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Enter Trainee Password" value="{{old('password')}}">
						</div>

						<!-- <div class="form-group">
							<label for="is_verified">Verification no: *</label>
							<input type="text" class="form-control" name="is_verified" id="is_verified" placeholder="verification no" value="{{old('is_verified')}}">
						</div> -->

						<div class="form-group">
							<label for="is_verified"> 
								<input type="checkbox" name="is_verified" id="" value="1">
								Is this trainee verified ? 
							</label>
							
						</div>
						<div class="form-group">
							<label for="is_played"> 
								<input type="checkbox" name="is_played" id="" value="1">
								Is this trainee played ? 
							</label>
							
						</div>

						<!-- <div class="form-group">
							<label for="is_played">Is played: *</label>
							<input type="text" class="form-control" name="is_played" id="is_played" placeholder="is played" value="{{old('is_played')}}">
						</div> -->

						<div class="form-group">
							<label for="ap_fee">Application fee: *</label>
							<input type="text" class="form-control" name="ap_fee" id="ap_fee" placeholder="Application fee" value="{{old('ap_fee')}}">
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

