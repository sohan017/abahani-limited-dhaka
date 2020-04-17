@extends('layouts.admin')

@section('title')Show Goal Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Goal page</h1>
	<a href="{{ route('admin.goal.create')}}" class="btn btn-primary">Add new Goal</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.goal.index') }}">Goal</a></li>
		<li class="active">Show Goal</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Show Goal</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $goal->id }}</td>
                	</tr>
                	<tr>
                		<th>goal number</th>
                		<td>{{ $goal->player_id }}</td>
                	</tr>
                	<tr>
                		<th>player name</th>
                		<td>{{ $goal->match_id }}</td>
                	</tr>
                	<tr>
                		<th>match name</th>
                		<td>{{ $goal->goal_time }}</td>
                	</tr>
                	<tr>
                		<th>Goal Type</th>
                		<td>{{ $goal->goal_type }}</td>
                	</tr>
                	<tr>
                		<th>Team goal Number</th>
                		<td>{{ $goal->goal_team }}</td>
                	</tr>
                	<tr>
                		<th>Goal time</th>
                		<td>{{ $goal->goal_half }}</td>
                	</tr>
                	
                	
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.goal.show', $goal->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.goal.edit', $goal->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.goal.destroy', $goal->id) }}" method="post">
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