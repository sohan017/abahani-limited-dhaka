@extends('layouts.admin')
@section('title') trainee fitness Profile @endsection
@section('css') 
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
    Trainee fitness Profile
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Examples</a></li>
		<li class="active">Trainee fitness profile</li>
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

					<img class="profile-user-img img-responsive img-circle" src="{{ asset($trainee->img) }}" alt="trainee profile picture">


					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Trainee</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Trainee Name</b> <a class="pull-right">{{ $trainee->name }}</a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right">{{ $trainee->email }}</a>
						</li>
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-9">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Physio Note For Trainee Fitness</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{route('physio.traineefitnessnote.post', $trainee->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						

						<div class="form-group">
							<label for="physio_note"> Physio Note: *</label>
							<textarea name="physio_note" id="physio_note" cols="30" rows="10" class="form-control" placeholder="Enter physio note" value="{{old('physio_note')}}"></textarea>
						</div>


						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
		<!-- /.box-body -->
	</div>

	<div class="row">
		<div class="col-md-3">

			
		</div>
			<!-- /.box -->
		<!-- /.col -->
		<div class="col-md-9">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Note</th>
							</tr>
						</thead>
						<tbody>
							@foreach($trainee->fitnesses as $fitness)
							<tr>
								<td>{{ $fitness->id }}</td>
								<td>{{ $fitness->physio_note }} </td>
								<td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Note</th>
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
