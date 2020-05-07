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
		<div class="col-md-1">

			
		</div>
			<!-- /.box -->
		<!-- /.col -->
		<div class="col-md-11">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Player Name</th>
								<th>physio Note</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($players as $player)
							<tr>
								<td>{{ $player->id }}</td>
								<td>{{ $player->name }}</td>
								<td>
									@if($player->fitnesses->last()) 
										{{ $player->fitnesses->last()->physio_note }}
									@else
										no fitness added
									@endif
								</td>
								
								<td>
									<div class="btn-group">
										<a href="{{route('physio.playerfitnessnote', $player->id)}}" class="btn btn-block btn-primary">Show</a>

									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Player Name</th>
								<th>physio Note</th>
								<th>Action</th>
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
