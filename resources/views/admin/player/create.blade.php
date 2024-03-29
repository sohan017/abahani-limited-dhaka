@extends('layouts.admin')

@section('title') Player Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Player Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.player.index') }}">Player</a></li>
		<li class="active">Player Create</li>
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
					<h3 class="box-title">Player Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.player.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
						</div>
					
						<div class="form-group">
							<label for="dob"> Date of birth: *</label>
							<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{old('dob')}}">
						</div>
					
						<div class="form-group">
							<label for="img">Image upload: *</label>
							<input type="file" class="form-control" id="img" name="img" value="{{old('img')}}">

							<p class="help-block">Example block-level help text here.</p>
						</div>

						<div class="form-group">
							<label for="jersy_no"> Jersy no: *</label>
							<input type="text" class="form-control" id="jersy_no" name="jersy_no" placeholder="Enter jersy no" value="{{old('jersy_no')}}">
						</div>

						<div class="form-group">
							<label for="con_num">Phone number: *</label>
							<input type="text" class="form-control" id="con_num" name="con_num" placeholder="Enter Trainee Contact Number" value="{{old('con_num')}}">
						</div>
					
						<div class="form-group">
							<label for="address"> Address: * </label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address"> {{old('address')}}</textarea>
						</div>
					
						<div class="form-group">
							<label for="city"> City: *</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{old('city')}}">
						</div>
					
						<div class="form-group">
							<label for="state"> State: *</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{old('state')}}">
						</div>
					
						<div class="form-group">
							<label for="country"> Country: *</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="{{old('country')}}">
						</div>
					
						<div class="form-group">
							<label for="nationality"> Nationality: *</label>
							<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter nationality" value="{{old('nationality')}}">
						</div>
					
						<div class="form-group">
							<label>Gender: *</label>
							
							<select class="form-control select2" name="gender" style="width: 100%;" value="{{old('gender')}}">
								<option selected="selected" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="hight"> Hight: *</label>
							<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter hight" value="{{old('hight')}}">
						</div>
					
						
						<div class="form-group">
							<label for="weight"> Weight: *</label>
							<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{old('weight')}}">
						</div>
					
						
					
						<div class="form-group">
							<label for="religion"> Religion: *</label>
							<select class="form-control select2" name="religion" style="width: 100%;" value="{{old('religion')}}">
								<option selected="selected" value="Muslim">Muslim</option>
								<option value="Hindu">Hindu</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="national_id_number"> National id number: *</label>
							<input type="text" class="form-control" id="national_id_number" name="national_id_number" placeholder="Enter national id number" value="{{old('national_id_number')}}">
						</div>
					
						<div class="form-group">
							<label for="birth_certificet_number"> Birth certificet number: *</label>
							<input type="text" class="form-control" id="birth_certificet_number" name="birth_certificet_number" placeholder="Enter birth certificet number" value="{{old('birth_certificet_number')}}">
						</div>


						<div class="form-group">
							<label for="team_id">Team name: *</label>
							<select name="team_id" id="team_id" class="form-control" value="{{old('team_id')}}">
								<option value="0">No Team</option>
								@foreach($teams as $team)
									<option value="{{ $team->id }}">{{ $team->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="playertype_id">Playertype name: *</label>
							<select name="playertype_id" id="playertype_id" class="form-control" value="{{old('playertype_id')}}">
								<option value="0">No Playertype</option>
								@foreach($playerTypes as $playerType)
									<option value="{{ $playerType->id }}">{{ $playerType->name }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="email">Email address: *</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{old('email')}}">
						</div>
						
						<div class="form-group">
							<label for="password">Password: *</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{old('password')}}">
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

