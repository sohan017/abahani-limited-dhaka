@extends('layouts.admin')

@section('title') Blank @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Coach 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Coach</a></li>
		<li class="active">Update Coach</li>
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
					<h3 class="box-title">Update Coach Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.coach.update', $coach->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ $coach->name }}">
						</div>
					
						<div class="form-group">
							<label for="dob"> Date of birth:</label>
							<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{ $coach->dob }}">
						</div>
					
						<div class="form-group">
							<label for="img">Image upload:</label>
							<input type="text" class="form-control" id="img" name="img" value="{{ $coach->img }}">

							<p class="help-block">Example block-level help text here.</p>
						</div>
					
						<div class="form-group">
							<label for="address"> Address: </label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{ $coach->address }}"</textarea>
						</div>
					
						<div class="form-group">
							<label for="city"> City:</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter category city" value="{{ $coach->city }}">
						</div>
					
						<div class="form-group">
							<label for="state"> State:</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter category state" value="{{ $coach->state }}">
						</div>
					
						<div class="form-group">
							<label for="country"> Country:</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter category country" value="{{ $coach->country }}">
						</div>
					
						<div class="form-group">
							<label for="nationality"> Nationality:</label>
							<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter category nationality" value="{{ $coach->nationality }}">
						</div>
					
						<div class="form-group">
							<label>Gender:</label>
							<select class="form-control select2" name="gender" value="{{ $coach->gender }}" style="width: 100%;">
								<option selected="selected" value="Muslim">Muslim</option>
								<option value="Hindu">Hindu</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="hight"> Hight:</label>
							<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter category hight" value="{{ $coach->hight }}">
						</div>
					
						<div class="form-group">
							<label for="religion"> Religion:</label>
							<select class="form-control select2" name="religion" value="{{ $coach->religion }}" style="width: 100%;">
								<option selected="selected" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Othe">Other</option>
							</select>	
						</div>
					
						<div class="form-group">
							<label for="national_id_number"> National id number:</label>
							<input type="text" class="form-control" id="national_id_number" name="national_id_number" placeholder="Enter category national id number" value="{{ $coach->national_id_number }}">
						</div>
					
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $coach->email }}">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password" value="{{ $coach->password }}">
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" > Check me out
							</label>
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

