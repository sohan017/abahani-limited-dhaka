@extends('layouts.admin')
@section('title') Auction Player page @endsection
@section('css') 
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

<style>
	a.btn.btn-info.bid_place{
		margin-left: 48px;
	}

	.form-group.input_right {
    margin-top: -10px;
}
</style>
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Auction Player page
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Auction Player </a></li>
		<li class="active">Auction Player page</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="" alt="Auction Player picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">Ronaldo</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right"></a>
						</li>
					</ul>
					 <a href="#" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>	
	</div>



	<!--  -->
	<!-- /.row -->

	</section>
	<!-- /.content -->

@endsection  

@section("js")

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endsection 
