@extends('layouts.admin')
@section('title') Sold Player Page @endsection
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
		Sold Player page
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Sold Player </a></li>
		<li class="active">Sold Player page</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<!-- left column -->
		<div class="col-md-3">
			<!-- Profile Image -->
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="" alt="Club picture">

					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Player Biding </p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Biding Name</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Biding Start Time</b> <a class="pull-right"></a>
						</li>
						<li class="list-group-item">
							<b>Biding Start Time</b> <a class="pull-right"></a>
						</li>
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-2"></div>
		
		<!-- /.box-body -->
	</div>

	<div class="row">
		<div class="col-md-">

			
		</div>
			<!-- /.box -->
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Bidder Name</th>
								<th>Domain</th>
								<th>Bid</th>
								<th>View</th>
								<th>Price</th>
								<th>Sold Price</th>
								<th>Club Name</th>
								<th>Player Sold</th>
								<!-- <th>Action</th> -->
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>1</td>
								<td>Hade Pain</td>
								<td>Hade@gmail.com</td>
								<td>Lorem </td>
								<td>10</td>
								<td>$15000</td>
								<td>$25000</td>
								<td>Real Madrid</td>
								<td>Yes</td>
							</tr>
							
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Bidder Name</th>
								<th>Domain</th>
								<th>Bid</th>
								<th>View</th>
								<th>Price</th>
								<th>Sold Price</th>
								<th>Club Name</th>
								<th>Player Sold</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.col -->
	</div>
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
