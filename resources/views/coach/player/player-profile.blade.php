@extends('layouts.admin')
@section('title') Player Profile @endsection
@section('css') 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Player Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">Player profile</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-5">

			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Player profile picture">

					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Player</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Contact</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Age</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Type</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Performance</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Total Goal</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament Goal</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Match</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Match Match</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Physio Note</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Country</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Varified</b> <a class="pull-right"></a>
						</li>
					</ul>

				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->

		</div>
		<!-- /.col -->
		<div class="col-md-3">
			@include("partial.notification")
			<div class="nav-tabs-custom">
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<h1>John Doe</h1> 
							<p>Architect & Engineer</p> 
							<p>We love that guy</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /.nav-tabs-custom -->

		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

</section>
<!-- /.content -->

@endsection   

.php