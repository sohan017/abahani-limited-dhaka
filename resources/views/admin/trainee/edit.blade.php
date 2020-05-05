@extends('layouts.admin')

@section('title') Edit Trainee @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Trainee 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.trainee.index') }}">Trainee</a></li>
		<li class="active">Update Trainee</li>
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
					<h3 class="box-title">Update Trainee Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.trainee.update', $trainee->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small> </small>
						<div class="form-group">
							<label for="name">Name: </label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $trainee->name }}">
						</div>

						<div class="form-group">
							<label for="con_num">Phone Number: </label>
							<input type="text" class="form-control" id="con_num" name="con_num" placeholder="Enter Contact Number" value="{{ $trainee->con_num }}">
						</div>

						<div class="form-group">
							<label for="playertype_id">Playertype name: </label>
							<select name="playertype_id" id="playertype_id" class="form-control">
								
								@foreach($playerTypes as $playerType)
									<option @if($playerType->id == $trainee->playertype_id) selected @endif value="{{ $playerType->id }}">{{ $playerType->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="coach_id">Coach name: </label>
							<select name="coach_id" id="coach_id" class="form-control">
								
								@foreach($coaches as $coach)
									<option @if($coach->id == $trainee->coach_id) selected @endif value="{{ $coach->id }}">{{ $coach->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="dob">Date of birth: </label>
							<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{ $trainee->dob }}">
						</div>
					
						<div class="form-group">
							<label for="img">Image upload: </label>
							<input type="file" class="form-control" id="img" name="img" value="{{ $trainee->img }}">

							<p class="help-block">Example block-level help text here.</p>
						</div>
					
						<div class="form-group">
							<label for="address">Address: </label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{ $trainee->address }}</textarea>
						</div>
					
						<div class="form-group">
							<label for="city">City: </label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{ $trainee->city }}">
						</div>
					
						<div class="form-group">
							<label for="state">State: </label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{ $trainee->state }}">
						</div>
					
						<div class="form-group">
							<label for="country">Country: </label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="{{ $trainee->country }}">
						</div>
					
						<div class="form-group">
							<label for="nationality">Nationality: </label>
							<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter nationality" value="{{ $trainee->nationality }}">
						</div>
					
						<div class="form-group">
							<label>Gender: </label>
							<select class="form-control select2" name="gender" value="{{ $trainee->gender }}" style="width: 100%;">
								<option selected="selected" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Othe">Other</option>
								
							</select>
						</div>
					
						<div class="form-group">
							<label for="hight">Hight: </label>
							<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter hight" value="{{ $trainee->hight }}">
						</div>

						<div class="form-group">
							<label for="weight">Weight: </label>
							<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{ $trainee->weight }}">
						</div>
					
						<div class="form-group">
							<label for="religion">Religion: </label>
							<select class="form-control select2" name="religion" value="{{ $trainee->religion }}" style="width: 100%;">
								<option selected="selected" value="Muslim">Muslim</option>
								<option value="Hindu">Hindu</option>
								<option value="Othe">Other</option>
								
							</select>	
						</div>
					
						<div class="form-group">
							<label for="national_id_number">National id number: </label>
							<input type="text" class="form-control" id="national_id_number" name="national_id_number" placeholder="Enter national id number" value="{{ $trainee->national_id_number }}">
						</div>
						<div class="form-group">
							<label for="birth_certificet_number">Birth certificet number: </label>
							<input type="text" class="form-control" id="birth_certificet_number" name="birth_certificet_number" placeholder="Enter national id number" value="{{ $trainee->birth_certificet_number }}">
						</div>
					
						<div class="form-group">
							<label for="email">Email address: </label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $trainee->email }}">
						</div>
						<div class="form-group">
							<label for="password">Password: </label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ $trainee->password }}">
						</div>

						<div class="form-group">
							<label for="is_verified">Verification no: </label>
							<input type="text" class="form-control" name="is_verified" id="is_verified" placeholder="is_verified" value="{{ $trainee->is_verified }}">
						</div>

						<div class="form-group">
							<label for="is_played">Is played: </label>
							<input type="text" class="form-control" name="is_played" id="is_played" placeholder="is_played" value="{{ $trainee->is_played }}">
						</div>

						<div class="form-group">
							<label for="ap_fee">Application fee: </label>
							<input type="text" class="form-control" name="ap_fee" id="ap_fee" placeholder="ap_fee" value="{{ $trainee->ap_fee }}">
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

