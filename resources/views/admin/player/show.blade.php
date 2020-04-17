@extends('layouts.admin')

@section('title')Show Player Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Player page</h1>
	<a href="{{ route('admin.player.create')}}" class="btn btn-primary">Add new Player</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.player.index') }}">Player</a></li>
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
                		<td>{{ $player->id }}</td>
                	</tr>
                	<tr>
                		<th>Name</th>
                		<td>{{ $player->name }}</td>
                	</tr>
                	<tr>
                		<th>Photo</th>
                		<td><img src="{{ asset($player->img) }}" alt="img"></td>
                	</tr>
                	<tr>
                		<th>Address</th>
                		<td>{{ $player->address }}</td>
                	</tr>
                	<tr>
                		<th>City</th>
                		<td>{{ $player->city }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.player.show', $player->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.player.edit', $player->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.player.destroy', $player->id) }}" method="post">
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