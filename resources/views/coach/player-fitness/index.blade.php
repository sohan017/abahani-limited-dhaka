@extends('layouts.admin')
@section('title') Player fitness Profile @endsection
@section('css') 
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Player fitness Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">Player fitness profile</li>
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
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-9">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Problem Name</th>
								<th>physio Note</th>
								<th>Player Comment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>1</td>
								<td>Hade Pain</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi perferendis aut praesentium, nostrum odio vitae tempora, commodi quos modi molestiae qui quisquam ex natus aperiam temporibus aliquid, neque tempore magni.</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi perferendis aut praesentium, nostrum odio vitae tempora, commodi quos modi molestiae qui quisquam ex natus aperiam temporibus aliquid, neque tempore magni.</td>
								<td>
									<div class="btn-group">
										<a href="" class="btn btn-default">Edit</a>
										<form role="form" action="" method="post">
											
											<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
										</form>

									</div>
								</td>
							</tr>
							
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Problem Name</th>
								<th>physio Note</th>
								<th>Player Comment</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.box-body -->
	</div>

	<div class="row">
		<div class="col-md-3">

			
		</div>
			<!-- /.box -->
		<!-- /.col -->
		
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
