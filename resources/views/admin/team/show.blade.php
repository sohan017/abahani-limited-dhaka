@extends('layouts.admin')

@section('title')Show Player Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Player page</h1>
	<a href="{{ route('player.create')}}" class="btn btn-primary">Add new Player</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Player</a></li>
		<li class="active">Show Player</li>
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
                		<td>{{ $team->id }}</td>
                	</tr>
                	<tr>
                		<th>Name</th>
                		<td>{{ $team->name }}</td>
                	</tr>
                	<tr>
                		<th>Captain</th>
                		<td>{{ $team->captain }}</td>
                	</tr>
                	<tr>
                		<th>W</th>
                		<td>{{ $team->win }}</td>
                	</tr>
                	<tr>
                		<th>L</th>
                		<td>{{ $team->loss }}</td>
                	</tr>
                	<tr>
                		<th>D</th>
                		<td>{{ $team->draw }}</td>
                	</tr>
                        	<div class="btn-group">
                        		<a href="{{ route('team.show', $team->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('team.edit', $team->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('team.destroy', $team->id) }}" method="post">
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