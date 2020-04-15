@extends('layouts.admin')

@section('title')Update Player @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Player 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Player</a></li>
		<li class="active"> Update Player </li>
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
					<h3 class="box-title">Update Player</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.player.update',$player->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="name"> Name:</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ $player->name }}">
						</div>
					
						<div class="form-group">
							<label for="dob"> Date of birth:</label>
							<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" value="{{ $player->dob }}">
						</div>
					
						<div class="form-group">
							<label for="img">Image upload:</label>
							<input type="text" class="form-control" id="img" name="img" value="{{ $player->img }}">

							<p class="help-block">Example block-level help text here.</p>
						</div>

						<div class="form-group">
							<label for="jersy_no"> Jersy no:</label>
							<input type="text" class="form-control" id="jersy_no" name="jersy_no" placeholder="Enter jersy no" value="{{ $player->jersy_no }}">
						</div>
					
						<div class="form-group">
							<label for="address"> Address: </label>
							<textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Enter address">{{ $player->address }}</textarea>
						</div>
					
						<div class="form-group">
							<label for="city"> City:</label>
							<input type="text" class="form-control" id="city" name="city" placeholder="Enter category city" value="{{ $player->city }}">
						</div>
					
						<div class="form-group">
							<label for="state"> State:</label>
							<input type="text" class="form-control" id="state" name="state" placeholder="Enter category state" value="{{ $player->state }}">
						</div>
					
						<div class="form-group">
							<label for="country"> Country:</label>
							<input type="text" class="form-control" id="country" name="country" placeholder="Enter category country" value="{{ $player->country }}">
						</div>
					
						<div class="form-group">
							<label for="nationality"> Nationality:</label>
							<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter category nationality" value="{{ $player->nationality }}">
						</div>
					
						<div class="form-group">
							<label>Gender:</label>
							
							<select class="form-control select2" name="gender" value="{{ $player->gender }}" style="width: 100%;">
								<option selected="selected" value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="hight"> Hight:</label>
							<input type="text" class="form-control" id="hight" name="hight" placeholder="Enter category hight" value="{{ $player->hight }}">
						</div>
					
						
						<div class="form-group">
							<label for="weight"> Weight:</label>
							<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter category weight" value="{{ $player->weight }}">
						</div>
					
						
					
						<div class="form-group">
							<label for="religion"> Religion:</label>
							<select class="form-control select2" name="religion" value="{{ $player->religion }}" style="width: 100%;">
								<option selected="selected" value="Muslim">Muslim</option>
								<option value="Hindu">Hindu</option>
								<option value="Othe">Other</option>
							</select>
						</div>
					
						<div class="form-group">
							<label for="national_id_number"> National id number:</label>
							<input type="text" class="form-control" id="national_id_number" name="national_id_number" placeholder="Enter category national id number" value="{{ $player->national_id_number }}">
						</div>
					
						<div class="form-group">
							<label for="birth_certificet_number"> Birth certificet number:</label>
							<input type="text" class="form-control" id="birth_certificet_number" name="birth_certificet_number" placeholder="Enter category birth certificet number" value="{{ $player->birth_certificet_number }}">
						</div>


						<div class="form-group">
							<label for="team_id">Team name:</label>
							<select name="team_id" id="team_id" class="form-control">
								
								@foreach($teams as $team)
									<option @if($team->id == $player->team_id) selected @endif value="{{ $team->id }}">{{ $team->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="playertype_id">Playertype name:</label>
							<select name="playertype_id" id="playertype_id" class="form-control">
								
								@foreach($playerTypes as $playerType)
									<option @if($playerType->id == $player->playertype_id) selected @endif value="{{ $playerType->id }}">{{ $playerType->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="email"> Email:</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter category email" value="{{ $player->email }}">
						</div>

						<!-- <div class="form-group">
							<label for="password">Update Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter category password" value="{{ $player->password }}">
						</div> -->

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

