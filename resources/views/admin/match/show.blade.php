@extends('layouts.admin')

@section('title')Show Match Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Match page</h1>
	<a href="{{ route('match.create')}}" class="btn btn-primary">Add new Match</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Match</a></li>
		<li class="active">Show Match</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Show Match</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $match->id }}</td>
                	</tr>
                	<tr>
                		<th>Name</th>
                		<td>{{ $match->turnament_name }}</td>
                	</tr>
                	<tr>
                		<th>Photo</th>
                		<td>{{ $match->vanue_name }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('match.show', $match->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('match.edit', $match->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('match.destroy', $match->id) }}" method="post">
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