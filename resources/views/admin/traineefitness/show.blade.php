@extends('layouts.admin')

@section('title')Show Trainee Fitness Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Trainee Fitness page</h1>
	<a href="{{ route('admin.traineefitness.create')}}" class="btn btn-primary">Add new Trainee Fitness</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.trainee.index') }}">Trainee fitness</a></li>
		<li class="active">Show Trainee Fitness</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Table With Full Features</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $traineefitness->id }}</td>
                	</tr>
                	<tr>
                		<th>Trainee Name</th>
                		<td>{{ $traineefitness->trainee_id }}</td>
                	</tr>
                	<tr>
                		<th>Physio name</th>
                		<td>{{ $traineefitness->physio_id }}</td>
                	</tr>
                	<tr>
                		<th>Is Feet</th>
                		<td>{{ $traineefitness->is_feet }}</td>
                	</tr>
                	<tr>
                		<th>City</th>
                		<td>{{ $traineefitness->physio_note }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.traineefitness.show', $traineefitness->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.traineefitness.edit', $traineefitness->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.traineefitness.destroy', $traineefitness->id) }}" method="post">
                        			@csrf
                        			@method('DELETE ')
                        			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                        		</form>

                        	</div>
                        </td>
                    </tr>

                </tbody>
            
            </table>
        </div>
        <!-- /.box-body -->
    </div>

</section>
<!-- /.content -->

@endsection


@section("js")

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
	$(function () {
		$('#example1s').DataTable()
	})
</script>

@endsection